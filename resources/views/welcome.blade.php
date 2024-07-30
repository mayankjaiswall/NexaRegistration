@extends('Mainlayout');

@section('bodyofpage')
    <header>
        <div class="logo">
            <h1>Car Dealership</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Inventory</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        
        <div class="hero-content">
            <h2>Find Your Dream Car</h2>
            <p>Explore our wide range of new and used cars at unbeatable prices.</p>
            <a href="{{route('registerdata')}}" class="btn">Register Yourself</a>
        </div>
    </section>

    <section class="featured-cars">
        <h2>Featured Cars</h2>
        <div class="car-grid">
            <div class="car-card">
                <img src="car1.jpg" alt="Car 1">
                <h3>2022 Tesla Model S</h3>
                <p>$85,000</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <div class="car-card">
                <img src="car2.jpg" alt="Car 2">
                <h3>2021 Ford Mustang</h3>
                <p>$45,000</p>
                <a href="#" class="btn">View Details</a>
            </div>
            <div class="car-card">
                <img src="car3.jpg" alt="Car 3">
                <h3>2020 BMW X5</h3>
                <p>$60,000</p>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Car Dealership. All rights reserved.</p>
    </footer>
@endsection