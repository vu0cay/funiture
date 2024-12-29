@props(['job'])

<x-panels class="flex flex-col text-center">
    
    <div class="py-6 space-y-4 flex flex-col justify-center">
        <div class="flex justify-center">
            <x-employer-logo :size="122" :img_url="$job->img_url" ></x-employer-logo>
        </div>
        <h3 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>
    

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag></x-tag>
            @endforeach
        </div>
    </div>


</x-panels>