{{-- <div>
    <div class="px-2.5 py-1 bg-secondary border-2 border-secondary rounded-full hover:bg-slate-300 duration-300">
        <h6 class="text-primary text-lg">
            {{ Auth::user()->personnel->school->school_name[0] }}
        </h6>
    </div>
</div> --}}
<div class="flex justify-center">
    <div class="flex relative w-8 h-8 bg-secondary justify-center items-center m-1 mr-2 text-xl rounded-full text-white hover:bg-yellow-500 duration-300 hover:scale-105">
        {{ Auth::user()->personnel->school->school_name[0] }}
    </div>
</div>
