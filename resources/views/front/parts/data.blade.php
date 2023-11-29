

<div class="homepage-lawhat-wrapper p-3 p-md-0 p-lg-0 mb-4">

    @foreach ($ads as $ad)
        <x-front.ad.default 
        :ad="$ad->id"
        :date="$ad->created_at->diffForHumans()"
        :first_letter="$ad->first_letter" 
        :second_letter="$ad->second_letter" 
        :third_letter="$ad->third_letter" 
        :first_number="$ad->first_number" 
        :second_number="$ad->second_number" 
        :third_number="$ad->third_number" 
        :fourth_number="$ad->fourth_number" 
        :price="$ad->price"
        :phone="$ad->phone"
        :allow_contact=1
        :whatsapp="$ad->user->whatsapp"
        :username="$ad->user->name"
        :in_auction="$ad->in_auction"
        />
    @endforeach

</div>