
<style>
    /* Initial state of the form */
    #enquiry-form-popup {
        display: none; /* Initially hidden */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        z-index: 9999;
        opacity: 0; /* Initially transparent */
        transition: opacity 0.5s ease; /* Smooth transition effect */
        animation: slideIn 0.5s ease forwards; /* Slide-in animation */
    }

    /* Show the form with animation */
    #enquiry-form-popup.show {
        display: block;
        opacity: 1;
    }

    .form-popup {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0px 0px 10px black;
    }

    .enquiry-popup {
        width: 100%;
    padding: 9px;
    border: 1px solid black;
    border-radius: 4px;
    background-color: #fef3e7;
    font-size: 18px;
    }

    /* Close Icon Styles */
    .close-icon-popup {
        position: absolute;
        top: 19px;
        right: 28px;
        cursor: pointer;
        color: red;
        font-size: unset;
    }

    /* Center the button horizontally */
    .center-btn {
        text-align: center;
    }

    /* Style for the submit button */
    .submit-btn-popup {
        margin-top: 4px;
        padding: 10px 20px; /* Adjust padding as needed */
        border: none;
        border-radius: 4px;
        background-color: #e97706;
        color: white;
        font-weight: 600;
        cursor: pointer;
    }

    .submit-btn-popup:hover {
        border:1px solid gray;
        box-shadow:1px 1px 10px orange;
    }

    /* Animation for sliding in the form */
    @keyframes slideIn {
        from {
            transform: translate(-50%, -100%);
        }
        to {
            transform: translate(-50%, -50%);
        }
    }

    /* Animation for fading in the form */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }


    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari&display=swap');

        p {
            font-family: 'Noto Sans Devanagari', sans-serif;
        }
        .center-btn{
            text-align: center;
        }

        .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Black with 50% opacity */
        z-index: 9998; /* Ensure overlay is behind the popup */
    }
</style>


<!-- Your form -->
<div class="overlay" id="popup"></div> <!-- Overlay background -->

<div id="enquiry-form-popup" class="show">
    <span class="close-icon-popup" onclick="closeForm()"><i class="fas fa-times"></i></span> <!-- Close Icon -->
    <form method="POST" action="" class="form-popup">
        <fieldset>
            <h4>Property Real Estate Agent</h4>
            <p><b>सुंदर घर देणारी माणसं..!!</b></p>
            <input class="enquiry-popup" type="text" id="name" placeholder="Enter Name" name="NAME"><br>
            <input class="enquiry-popup" style="margin-top: 5px;" type="number" id="mobile" name="MOBILE_NO" placeholder="Enter Mobile Number"><br>
            <textarea class="enquiry-popup ml-1" style="margin-top: 4px;" name="onlineformpropertyfill" id="message" placeholder="Enter Location" cols="30" rows="4"></textarea><br>
            <div class="center-btn">
                <button style="margin-top: 4px;" type="submit" class="submit-btn-popup">Submit</button> <br>
                <span style="font-size:15px; color:blue;">Fill-up this Enquiry Form to get Feedback From our Team.</span>
            </div>
        </fieldset>
    </form>
</div>

<script>
    // JavaScript function to close the popup form
    function closeForm() {
        var enquiryForm = document.getElementById('enquiry-form-popup');
        enquiryForm.style.opacity = '0';
        setTimeout(() => { enquiryForm.style.display = 'none'; }, 500);
        document.querySelector('#popup').style.display = 'none'; // Hide overlay

    }
    // JavaScript function to display the popup form with animation
    document.addEventListener('DOMContentLoaded', function() {
        var enquiryForm = document.getElementById('enquiry-form-popup');
        enquiryForm.style.display = 'block';
    });

    // Close the popup form when clicking outside of it
    document.body.addEventListener('click', function(event) {
        var enquiryForm = document.getElementById('enquiry-form-popup');
        if (!enquiryForm.contains(event.target)) {
            enquiryForm.style.opacity = '0';
            setTimeout(() => { enquiryForm.style.display = 'none'; }, 500);
        document.querySelector('#popup').style.display = 'none'; // Hide overlay

        }
    });
</script>


