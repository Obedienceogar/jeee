@if(isset($issue))
    <h2>
        Submissions for the Journal are open
    </h2>
    <h4>
        <span class="text-primary">Current Issue</span>
        {{--- November - December, 2017 | Issue 7 | Vol 22--}}
        {{ $issue['title'] }} | Issue {{ $issue['number'] }} | Vol. {{ $issue['volume'] }}
    </h4>
    <a href="{{ route('manuscripts.create') }}" class="btn btn-primary btn-lg">
        <i class="material-icons">unarchive</i> Submit a Manuscript
        <div class="ripple-container"></div>
    </a>
@endif