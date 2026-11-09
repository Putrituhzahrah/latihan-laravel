<x-app>

    <x-slot:title>{{ $title }} </x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" role="button">Back To Department</a>

    <ul class="list-group">


        @foreach ($department->leactures as $leacturer)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $leacturer->name }}</li>
        @endforeach
    </ul>

</x-app>
