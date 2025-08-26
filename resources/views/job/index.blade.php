<div>
    <!-- We must ship. - Taylor Otwell -->
    <h1>Job Listings</h1>
    <p>Welcome to the job board!</p>
    <h1>
        {{ $name }}
    </h1>
    <ul style="list-style-type: none; padding: 0; ">
        @foreach ($jobs as $job)
            <li style="width:fit-content; border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                <strong>{{ $job['title'] }}</strong> at {{ $job['company'] }} ({{ $job['location'] }})
            </li>
        @endforeach
    </ul>
</div>
