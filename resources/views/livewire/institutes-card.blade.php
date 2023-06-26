<div class="text-center grid place-items-center space-y-12 py-16">

    {{-- Title --}}
    <div class="max-w-5xl space-y-6 ">
        <h2 class="mt-4 max-w-5xl text-slate-900 text-3xl sm:text-6xl tracking-tight font-bold  font-['inter'] uppercase prominent-titles">Our
            Training Institutes</h2>
        <p class=" text-3xl font-bold
         text-slate-800 px-5 dark:text-white ">
            Join us in raising champions with the wherewithal to effect systematic and sustainable transformation in
            every sphere of society.
        </p>

    </div>

    {{-- Image --}}
    <div class="gap-px grid md:grid-cols-4 md:mx-5 mt-8 md:px-8 sm:grid-cols-2">

        @forelse ($institutes as $institute)
            <a href="{{ route('institute.show', [$institute->slug]) }}"
                class="relative  p-4 sm:py-8 sm:px-6 transition duration-300 z-10 before:absolute rounded-md hover:bg-gray-100/50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <div class="flex text-left">
                    <img class="object-cover w-20 h-20 mr-4 rounded-full shadow-md "
                        src="{{ asset($institute->institute_logo) }}" alt="Person" />
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-bold uppercase">{{ $institute->acronym }}</p>
                        <p class="text-sm text-gray-500">{{ $institute->name }}</p>
                    </div>
                </div>
            </a>
        @empty
            <div></div>
        @endforelse

    </div>



    <div class="text-center w-full mx-auto">
        <a href="{{ url('/institutes') }}"> <button class="cbutton !py-1 w-24 font-bold ">More On Our Institutes</button>
        </a>
    </div>



</div>
