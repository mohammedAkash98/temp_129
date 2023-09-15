@extends('main_master')

@section('page_content')
    <header class="bg-success text-white text-center py-5">
        <h1 class="display-4">Contact Us</h1>
    </header>

    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Information</h2>
                <address>
                    <p><strong>Address:</strong> 123 Main Street, City, Country</p>
                    <p><strong>Email:</strong> <a href="mailto:contact@example.com">contact@example.com</a></p>
                    <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                </address>
            </div>
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
