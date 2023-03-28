<div class="flex justify-center ">
    <div class="flex-col items-center justify-center h-screen">
        <div class="mt-24">
            <h3 class="text-xl"> Hello my name is {{$user->name}} 👋</h3>
        </div>
        <div class="mt-8">
            <h1 class="text-4xl font-bold">My history 📔</h1>
        </div>
        <div class="mt-12">
            <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur</h3>
        </div>
        <div class="flex flex-row gap-8 mt-12">
            <div>
                <a href="{{ $user->github }}" class="relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group" target="_blank">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-purple-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                    <span class="relative">Github</span>
                </a>
            </div>
            <div>
                <a href="{{ $user->linkedin }}" class="relative inline-flex items-center justify-center px-10 py-4 overflow-hidden font-mono font-medium tracking-tighter text-white bg-gray-800 rounded-lg group" target="_blank">
                    <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-purple-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                    <span class="relative">Linkedin</span>
                </a>
            </div>
        </div>
    </div>

</div>
