<?php echo '<?php' ?>


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaratrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('<?php echo e($laratrust['tables']['roles']); ?>', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for storing permissions
        Schema::create('<?php echo e($laratrust['tables']['permissions']); ?>', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

<?php if($laratrust['teams']['enabled']): ?>
        // Create table for storing teams
        Schema::create('<?php echo e($laratrust['tables']['teams']); ?>', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

<?php endif; ?>
        // Create table for associating roles to users and teams (Many To Many Polymorphic)
        Schema::create('<?php echo e($laratrust['tables']['role_user']); ?>', function (Blueprint $table) {
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['role']); ?>');
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['user']); ?>');
            $table->string('user_type');
<?php if($laratrust['teams']['enabled']): ?>
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['team']); ?>')->nullable();
<?php endif; ?>

            $table->foreign('<?php echo e($laratrust['foreign_keys']['role']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['roles']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');
<?php if($laratrust['teams']['enabled']): ?>
            $table->foreign('<?php echo e($laratrust['foreign_keys']['team']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['teams']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['<?php echo e($laratrust['foreign_keys']['user']); ?>', '<?php echo e($laratrust['foreign_keys']['role']); ?>', 'user_type', '<?php echo e($laratrust['foreign_keys']['team']); ?>']);
<?php else: ?>

            $table->primary(['<?php echo e($laratrust['foreign_keys']['user']); ?>', '<?php echo e($laratrust['foreign_keys']['role']); ?>', 'user_type']);
<?php endif; ?>
        });

        // Create table for associating permissions to users (Many To Many Polymorphic)
        Schema::create('<?php echo e($laratrust['tables']['permission_user']); ?>', function (Blueprint $table) {
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['permission']); ?>');
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['user']); ?>');
            $table->string('user_type');
<?php if($laratrust['teams']['enabled']): ?>
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['team']); ?>')->nullable();
<?php endif; ?>

            $table->foreign('<?php echo e($laratrust['foreign_keys']['permission']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['permissions']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');
<?php if($laratrust['teams']['enabled']): ?>
            $table->foreign('<?php echo e($laratrust['foreign_keys']['team']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['teams']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['<?php echo e($laratrust['foreign_keys']['user']); ?>', '<?php echo e($laratrust['foreign_keys']['permission']); ?>', 'user_type', '<?php echo e($laratrust['foreign_keys']['team']); ?>']);
<?php else: ?>

            $table->primary(['<?php echo e($laratrust['foreign_keys']['user']); ?>', '<?php echo e($laratrust['foreign_keys']['permission']); ?>', 'user_type']);
<?php endif; ?>
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('<?php echo e($laratrust['tables']['permission_role']); ?>', function (Blueprint $table) {
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['permission']); ?>');
            $table->unsignedBigInteger('<?php echo e($laratrust['foreign_keys']['role']); ?>');

            $table->foreign('<?php echo e($laratrust['foreign_keys']['permission']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['permissions']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('<?php echo e($laratrust['foreign_keys']['role']); ?>')->references('id')->on('<?php echo e($laratrust['tables']['roles']); ?>')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['<?php echo e($laratrust['foreign_keys']['permission']); ?>', '<?php echo e($laratrust['foreign_keys']['role']); ?>']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('<?php echo e($laratrust['tables']['permission_user']); ?>');
        Schema::dropIfExists('<?php echo e($laratrust['tables']['permission_role']); ?>');
        Schema::dropIfExists('<?php echo e($laratrust['tables']['permissions']); ?>');
        Schema::dropIfExists('<?php echo e($laratrust['tables']['role_user']); ?>');
        Schema::dropIfExists('<?php echo e($laratrust['tables']['roles']); ?>');
<?php if($laratrust['teams']['enabled']): ?>
        Schema::dropIfExists('<?php echo e($laratrust['tables']['teams']); ?>');
<?php endif; ?>
    }
}
<?php /**PATH C:\wamp64\www\projects\wmw_blog\vendor\santigarcor\laratrust\src/../resources/views/migration.blade.php ENDPATH**/ ?>