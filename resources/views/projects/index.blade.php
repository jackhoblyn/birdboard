<!DOCTYPE html>
<html>

<head>
	<title>PROJECTS</title>
</head>

<body>
	<h1>BIRDBOARD</h1>

	<ul>
		@forelse($projects as $project)
			<li> 
				<a href ="{{ $project->path() }}">{{ $project->title }}</a>
			</li>
		@empty
			<li>No Projects to Display</li>
		
		@endforelse
	</ul>
	
</body>

</html>