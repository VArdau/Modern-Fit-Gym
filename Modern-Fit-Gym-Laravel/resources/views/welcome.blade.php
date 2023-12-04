<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}">


    <title>Modern Fit Gym</title>
</head>
<body>
    <!-- <header>
        <nav>
            <img class="navbar-logo" src="{{ asset('Images/logo.png') }}" height="100px" width="100px" />

            <h2>Modern FIT Gym Home Page</h2>
            <a href="/">Home</a>
            <a href="/login">Login</a>
            <a href="/contact">Contact</a>
        </nav>
    </header> -->
    @extends('nav')
    @section('content')

    <main>
        <div class="welcome">
            <h1><strong>Welcome to Modern Fit Gym etc!</strong></h1>
        </div>
        <div class="container">
            <div class="info">
                <h2><strong>What we are About</strong></h2>
                <p>ModernFit Gym is based in sheffield. We have an array of facilities and seasoned specialists offering nutritional and workout guidance.<br> We are a gym who used to be local and now have started to expand across United Kingdom.</p>
            </div>
            <div class="info">
                <h2><strong>Register</strong></h2>
                <p>Register with us if you havent yet! Monthly memberships which contain your own trainer to assist your journey, through nutritional and physcial advice. They will be able to give personalised regimes just for your goals, and you will be able to keep track of your progress with our easy to use website.
                </p>
                <a href="register.html"><button id="register">Register</button></a>
            </div>
        </div>
        
        <div class="facility">
            <h2><strong>Facilities</strong></h2>
            </p>
        </div>
        <div class="policy">
            <h2><strong>Policy</strong></h2>
            </p>
        </div>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima animi sit fuga culpa tenetur praesentium sapiente nihil esse in placeat atque tempore magni aliquam, consectetur commodi nostrum fugiat nobis officia? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit voluptas tenetur a amet repellendus! Qui, commodi. Ut nam molestiae animi libero! Repellat harum aut facilis ullam, explicabo quaerat? Natus, maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque nihil debitis autem quis maxime laudantium? Ex at dolorem deserunt voluptates placeat numquam magni hic eligendi nemo, tenetur expedita quis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero omnis exercitationem commodi laborum, sit labore quibusdam, iusto recusandae aperiam cupiditate similique minus fuga delectus. Sint ut error totam reiciendis! Doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quaerat laudantium inventore a rem natus molestiae tempore delectus cumque architecto fugit vitae debitis similique ducimus consequuntur, deleniti nobis odit ullam!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime officia tenetur nesciunt, tempora non illo esse cum numquam molestiae ab recusandae repudiandae id atque! Provident unde itaque alias natus id.
        </p>
    </main>

    <footer>
        <p>&copy; 2023 Modern Fit Gym. All rights reserved.</p>
        <a href="./contact.html">Contact Us</a>
    </footer>
    @endsection

</body>


</html>