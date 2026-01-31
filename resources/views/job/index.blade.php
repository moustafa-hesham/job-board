<div>
    <h1>Job Boad</h1>
    @foreach ($jobs as $job)
        <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
    @endforeach
</div>