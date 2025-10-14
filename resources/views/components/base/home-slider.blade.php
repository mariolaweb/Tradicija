<div class="absolute w-full bg-black">
    <div class="relative z-0" x-data="{
                      active: 1,
                      loop() {
                          setInterval(() => { this.active = this.active === 2 ? 1 : this.active+1 }, 4000)
                      },
                  }" x-init="loop">
        <div
            class="relative flex justify-center w-full h-screen overflow-hidden lg:items-center">
            <div class="absolute inset-0 z-10 bg-black/50"></div>
            <div class="absolute bg-transparent" x-show="active == 1"
                x-transition:enter="transition duration-1000"
                x-transition:enter-start="transition-opacity ease-in opacity-0"
                x-transition:enter-end="transition-opacity ease-in opacity-100"
                x-transition:leave="transition duration-1000" x-transition:leave-start="transition"
                x-transition:leave-end="transition-opacity ease-in opacity-0">

                <img class="object-cover object-center w-full h-full md:hidden" alt="Restoran Tradicija"
                    src="{{asset('images/base/tradicija-slide-test-mob-1.webp')}}" />
                <img class="hidden object-cover w-full min-h-screen md:flex" alt="Restoran Tradicija"
                    src="{{asset('images/base/tradicija-slide-test-1.webp')}}" />
                <div class="absolute inset-0 z-10"></div>
            </div>
            <div class="absolute bg-transparent" x-show="active == 2"
                x-transition:enter="transition duration-1000"
                x-transition:enter-start="transition-opacity ease-in opacity-0"
                x-transition:enter-end="transition-opacity ease-in opacity-100"
                x-transition:leave="transition duration-1000" x-transition:leave-start="transition"
                x-transition:leave-end="transition-opacity ease-in opacity-0">
                <img class="object-cover object-center w-full h-full md:hidden" alt="Restoran Tradicija"
                    src="{{asset('images/base/tradicija-slide-test-mob-2.webp')}}" />
                <img class="hidden object-cover min-h-screen md:flex" src="{{asset('images/base/tradicija-slide-test-2.webp')}}" alt="Restoran Tradicija" />
                <div class="absolute inset-0 z-10"></div>
            </div>
        </div>
    </div>
</div>
