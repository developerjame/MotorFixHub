   <x-layout>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        <x-card>
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="{{ asset('/images/email.png')}}"
                    alt=""
                />
                <div>
                    
                    <h3 class="text-2xl font-bold">
                        <p>Messages</p>
                    </h3>
                    <div class="text-sm mb-4">{{$count1}} messages</div>
                    <div class="text-xl mb-4"><a href="/admin/message">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>
           <x-card>
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="{{ asset('/images/bell.png')}}"
                    alt=""
                />
                <div>
                    <h3 class="text-2xl font-bold">
                        <p>Subscriptions</p>
                    </h3>
                    <div class="text-sm mb-4">{{$count2}} subscriptions</div>
                    <div class="text-xl mb-4"><a href="/admin/subscription">Click here <i class="bi bi-hand-index-thumb"></i></a></div>
                    
                </div>
            </div>
           </x-card>
    
    </div>
    <div class="mt-6 p-4">
        
    </div>
    </x-layout>