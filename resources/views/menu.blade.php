
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GROUP 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* General Navbar Styling */
   /* Extra styling for the navbar */
   .navbar {
            padding: 10px 20px;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .brand-name {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .form-control {
            width: 250px; /* Adjust width according to your needs */
        }

        .navbar .mic-icon {
            margin-left: 10px;
            display: flex;
            align-items: center;
        }

        .navbar img {
            width: 30px;
            height: 30px;
        }

        /* Remove focus shadow on input */
        .form-control:focus {
            box-shadow: none;
            border-color: #86b7fe;
        }


/* Search bar styling */
.form-control {
    width: 250px; /* Adjust width of the search bar */
    border-radius: 25px;
    padding: 10px 15px;
    border: 1px solid #ced4da;
    transition: box-shadow 0.3s ease;
}

.form-control:focus {
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
    outline: none;
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745;
    border-radius: 25px;
    padding: 8px 16px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-outline-success:hover {
    background-color: #28a745;
    color: #fff;
}

/* Navbar responsiveness */
@media (max-width: 768px) {
    .navbar-brand {
        font-size: 1.2rem;
    }

    .form-control {
        width: 200px;
    }
}
   /* General container styling */
.container {
    max-width: 1200px; /* Limit the container width */
    margin: 0 auto; /* Center the container */
    padding: 20px; /* Add padding around the container */
}

/* Menu items styling */
.menu-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Space between cards */
    margin-bottom: 40px; /* Space between rows */
}

/* Individual item card styling */
.item-card {
    margin-bottom: 30px; /* Space below each card */
}

/* Card styling */
.card {
    border: none; /* Remove default border */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Reduced shadow for depth */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition on hover */
    overflow: hidden; /* Ensures rounded corners are effective */
    width: 100%; /* Make cards smaller */
    max-width: 300px; /* Limit max width of card */
}

/* Card hover effect */
.card:hover {
    transform: translateY(-3px); /* Lift effect on hover */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
}

/* Image styling */
.card-img-top {
    height: 180px; /* Adjusted height for images */
    object-fit: cover; /* Cover the entire area */
    transition: transform 0.3s ease; /* Smooth zoom-in effect on hover */
}

/* Image hover effect */
.card-img-top:hover {
    transform: scale(1.03); /* Slight zoom-in effect on hover */
}

/* Card body styling */
.card-body {
    padding: 15px; /* Padding inside the card */
    text-align: center; /* Center align text */
    background-color: #ffffff; /* White background for contrast */
}

/* Title styling */
.card-title {
    font-size: 1.25rem; /* Adjusted font size for title */
    color: #333; /* Dark color for text */
    margin-bottom: 8px; /* Space below title */
    font-family: 'Arial', sans-serif; /* Soft font choice */
}

/* Price styling */
.card-text {
    font-size: 1rem; /* Adjusted for emphasis */
    color: #555; /* Darker gray for readability */
    margin: 4px 0; /* Space around price */
}

/* Rating styling */
.rating {
    font-size: 0.9rem; /* Standard size for ratings */
    margin-bottom: 10px; /* Space below rating */
}

.text-warning {
    color: #f8b400; /* Gold color for stars */
}

/* Button styling */
.btn-primary {
    background-color: #ff6f61; /* Soft coral color */
    border: none; /* Remove border */
    padding: 10px 15px; /* Ample padding */
    border-radius: 25px; /* Rounded edges */
    font-size: 0.9rem; /* Standard font size */
    transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transition */
}

.btn-primary:hover {
    background-color: #ff4d4f; /* Darker coral on hover */
    transform: translateY(-2px); /* Lift effect on hover */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .menu-items {
        justify-content: center; /* Center cards on smaller screens */
    }

    .item-card {
        flex: 0 0 90%; /* Make cards take 90% width on small screens */
    }

    .card-title {
        font-size: 1.1rem; /* Smaller font size for titles on mobile */
    }

    .card-text {
        font-size: 0.9rem; /* Smaller font size for price on mobile */
    }

    .btn-primary {
        padding: 8px 12px; /* Smaller padding for buttons on mobile */
    }
}

       
    </style>
</head>
<body>
    @include('components.navbar') <!-- Navbar -->
    @include('components.category_buttons') <!-- Category Buttons -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('components.menu_items') <!-- Menu Items -->
                
            </div>
            @include('components.cart_summary') <!-- Cart Summary -->
        </div>
    </div>
    <script></script>
</html>
