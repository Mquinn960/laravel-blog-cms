@extends('templates.layout')

@section('title', '| Contact')

@section('content')

    <article>

        <h1>Contact Me</h1>

        <p>Get in touch with me at the following.</p>

        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label name="name">Your Name:</label>
                        <input id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Send" class="btn btn-success">
                </form>
            </div>

            <div class="col-md-6">
                <pre>
                    <code>
    {
        "contact": {
            "email": "matt@mquinn.co.uk",
            "telephone": "1DA289FDF"
        }
    }
                    </code>
                </pre>
            </div>
        </div>

    </article>

@endsection