<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Webpage</title>
    <!-- Include your CSS and other head elements here -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Your construction webpage content here -->
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Update Page Content</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('construction.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $title }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ $description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Content</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include your scripts here -->
</body>
</html>
