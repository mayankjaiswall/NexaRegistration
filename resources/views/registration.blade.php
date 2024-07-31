<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{url('css/register.css')}}">

</head>
<body>
    <div class="form-container">
        <form action="{{route('storeddata')}}" method="post" class="registration-form">
          @csrf   {{-- why it is here  --}}
            <h2>Registration Form</h2>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required >
                @error('name')
                 <div class="alert alert-danger">{{$message}}</div>    
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
                @error('city')
                 <div class="alert alert-danger">{{$message}}</div>    
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="0">
                @error('age')
                 <div class="alert alert-danger">{{$message}}</div>    
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                  
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                @error('gender')
                <div class="alert alert-danger">{{$message}}</div>    
               @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>    
               @enderror
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" name="contact" required pattern="[0-9]{10}">
                @error('contact')
                <div class="alert alert-danger">{{$message}}</div>    
               @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
                @error('address')
                <div class="alert alert-danger">{{$message}}</div>    
               @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn">Register</button>
            </div>
        </form>
    </div>

</body>
</html>