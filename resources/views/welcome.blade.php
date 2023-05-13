<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laraWeb</title>
</head>
<body>


<main>
    <section class="section-1">
        <nav>
            <div class="nav-main">
                <div class="nav-logo">
                    <a href="index.html"><img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Logo.svg" alt=""> <span>LaraWeb is hiring!</span></a>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
                <ul>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Join Waitlist</a></li>
                </ul>
                <div class="nav-mobile-menu" id="nav-mobile-menu">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Hamburger-Menu.svg" alt="">
                </div>
            </div>
        </nav>

        <nav class="mobile-menu">
            <div class="mobile-menu-main">
                <ul>
                    <li><a href="#">Plans</a></li>
                    <li><a href="#">Find Domain</a></li>
                    <li><a href="#">Why Hosterr</a></li>
                </ul>
                <ul>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Join Waitlist</a></li>
                </ul>
            </div>
        </nav>

        <div class="section-1-main">
            <div class="section-1-content">
                <h1 class="section-1-title">Host your website in less than 5 minutes.</h1>
                <p class="section-1-desc">With Hosterr, get your website up and running in no less than 5 minutes with the most competitive pricing packages available online.</p>
                <form class="section-1-form">
                    <input type="email" placeholder="Enter E-mail Address" required>
                    <button>Join Waitlist</button>
                </form>
                <p class="section-1-alt-txt"> <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Checkmark.svg" alt=""> <span>IndieBrewers in curating their personal digest.</span> </p>
            </div>
            <div class="section-1-imgs">
                <div class="section-1-imgs-main">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Blue-Shape.svg" alt="">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Pink-Shape.svg" alt="">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Purple-Shape.svg" alt="">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Hero-Image-Model.png" alt="">
                </div>
            </div>
        </div>

        <footer>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
            <div class="user-content">
                <div class="user-img">
                    <img src="https://rvs-hosterr-waitlist-page.vercel.app/Assets/Help-Avatar.svg" alt="">
                </div>
                <div class="user-details">
                    <h5>Have any questions?</h5>
                    <h4><a href="#">Talk to a specialist</a></h4>
                </div>
            </div>
        </footer>
    </section>
</main>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
}
body {
    width: 100%;
    height: auto;
}



main {
    background: #f9f4e8;
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
}
main section.section-1 {
    width: 80%;
    height: 90%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    row-gap: 50px;
}


main section.section-1 nav {
    width: 100%;
    padding: 0px;
    display: flex;
    justify-content: center;
    background: transparent;
}
main section.section-1 nav .nav-main {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
}
main section.section-1 nav .nav-main .nav-logo a {
    text-decoration: none;
    display: flex;
    align-items: center;
    column-gap: 15px;
}
main section.section-1 nav .nav-main .nav-logo a img {
    display: block;
    width: 120px;
}
main section.section-1 nav .nav-main .nav-logo a span {
    background: rgb(234,176,82);
    background: linear-gradient(24deg, rgba(234,176,82,1) 41%, rgba(234,85,115,1) 70%);
    color: #fff;
    padding: 7px 14px;
    font-size: 12px;
    border-radius: 20px;
    text-align: center;
}

main section.section-1 nav .nav-main ul {
    display: flex;
    list-style-type: none;
    align-items: center;
}
main section.section-1 nav .nav-main ul li {
    border-radius: 5px;
}
main section.section-1 nav .nav-main ul li a {
    text-decoration: none;
    display: block;
    font-weight: 500;
    color: #83817e;
    padding: 12px 15px;
    border-radius: 5px;
    transition: .2s background ease;
}
main section.section-1 nav .nav-main ul li a:hover {
    background: rgb(128 128 128 / 23%);
}
main section.section-1 nav .nav-main ul:nth-of-type(2) li:last-child a {
    color: #fff;
    font-weight: 600;
    background-color: #4977ea;
    margin-left: 10px;
}

main section.section-1 nav .nav-main .nav-mobile-menu {
    display: none;
    cursor: pointer;
}
main section.section-1 nav .nav-main .nav-mobile-menu img {
    width: 100%;
    display: block;
}



main section.section-1 nav.mobile-menu {
    padding: 0px;
    display: none;
    width: 100%;
}
main section.section-1 nav.mobile-menu.active {
    display: block;
}
main section.section-1 nav.mobile-menu .mobile-menu-main {
    width: 100%;
}

main section.section-1 nav.mobile-menu .mobile-menu-main ul {
    display: flex;
    flex-direction: column;
    list-style: none;
    width: 100%;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul li {
    border-radius: 5px;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul li a {
    text-decoration: none;
    display: block;
    font-size: 15px;
    font-weight: 400;
    color: #000;
    padding: 12px 15px;
    border-radius: 5px;
    transition: .2s background ease;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul li a:hover {
    background: rgb(128 128 128 / 23%);
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul:first-child {
    padding-bottom: 10px;
    border-bottom: 1px solid #4f4f4f42;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul:last-child {
    padding-top: 10px;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul:last-child li:last-child {
    margin-top: 10px;
}
main section.section-1 nav.mobile-menu .mobile-menu-main ul:last-child li:last-child a {
    color: #fff;
    font-weight: 600;
    background-color: #664efc;
}




main section.section-1 .section-1-main {
    width: 100%;
    display: flex;
    align-items: center;
    position: relative;
    column-gap: 100px;
}
main section.section-1 .section-1-main .section-1-content {
    width: 60%;
    display: flex;
    flex-direction: column;
    row-gap: 20px;
}
main section.section-1 .section-1-main .section-1-content .section-1-title {
    font-size: 40px;
    line-height: 42px;
}
main section.section-1 .section-1-main .section-1-content .section-1-desc, main section.section-1 .section-1-main .section-1-content .section-1-alt-txt {
    color: #83817e;
    line-height: 24px;
}
main section.section-1 .section-1-main .section-1-content .section-1-form {
    width: 100%;
    display: flex;
    column-gap: 12px;
    align-items: center;
}
main section.section-1 .section-1-main .section-1-content .section-1-form input {
    width: 230px;
    padding: 12px 15px;
    outline: none;
    border: 0px;
    font-size: 16px;
    color: #83817e;
    font-weight: 500;
    background: #fff;
}
main section.section-1 .section-1-main .section-1-content .section-1-form button {   
    color: #fff;   
    background: #4977ea;  
    outline: none;  
    border: 0px;   
    padding: 12px 15px;   
    font-size: 15px;    
    border-radius: 5px;    
    cursor: pointer;
}
main section.section-1 .section-1-main .section-1-content .section-1-alt-txt {
    display: flex;
    column-gap: 12px;
    align-items: center;
}
main section.section-1 .section-1-main .section-1-content .section-1-alt-txt img {
    display: block;
}


main section.section-1 .section-1-main .section-1-imgs {
    width: 40%;
    height: 500px;
    position: relative;
}
main section.section-1 .section-1-main .section-1-imgs .section-1-imgs-main {
    width: 100%;
    height: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
}
main section.section-1 .section-1-main .section-1-imgs .section-1-imgs-main img {
    width: 90%;
    display: block;
    position: absolute;
}
main section.section-1 .section-1-main .section-1-imgs .section-1-imgs-main img:nth-child(1) {
    transform: rotate(-45deg);
}
main section.section-1 .section-1-main .section-1-imgs .section-1-imgs-main img:nth-child(2) { 
    transform: rotate(-30deg);
}
main section.section-1 .section-1-main .section-1-imgs .section-1-imgs-main img:nth-child(3) {  
    transform: rotate(-15deg);
}



main section.section-1 footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
}
main section.section-1 footer ul {
    display: flex;
    list-style-type: none;
    align-items: center;
    column-gap: 25px;
}
main section.section-1 footer ul li a {
    text-decoration: none;
    display: block;
    font-weight: 500;
    color: #83817e;
}
main section.section-1 footer .user-content {
    display: flex;
    align-items: center;
    column-gap: 12px;
}
main section.section-1 footer .user-content .user-img img {
    display: block;
    width: 45px;
}
main section.section-1 footer .user-content .user-details {
    display: flex;
    flex-direction: column;
}
main section.section-1 footer .user-content .user-details h5 {
    font-weight: 500;
    font-size: 14px;
}
main section.section-1 footer .user-content .user-details h4 {
    font-weight: bold;
    font-size: 16px;
}
main section.section-1 footer .user-content .user-details h4 a {
    text-decoration: none;    
    color: #000;
}





@media only screen and (max-width: 1200px) {
    main {
        height: auto;
    }
    main section.section-1 {
        width: 90%;
        height: auto;
        padding: 35px 0px;
        row-gap: 20px;
    }
    main section.section-1 .section-1-main {
        flex-direction: column-reverse;
    }
    main section.section-1 .section-1-main .section-1-content {
        width: 100%;
        row-gap: 15px;
    }
    main section.section-1 .section-1-main .section-1-imgs {
        width: 50%;
    }
    main section.section-1 footer {
        margin-top: 25px;
    }
    main section.section-1 .section-1-main .section-1-content .section-1-form input {
        width: 300px;
        padding: 15px 20px;
    }
    main section.section-1 .section-1-main .section-1-content .section-1-form button {
        padding: 15px 20px;
    }
}

@media only screen and (max-width: 900px) {
    main section.section-1 nav .nav-main .nav-mobile-menu {
        display: block;
    }
    main section.section-1 nav .nav-main ul {
        display: none;
    }
}

@media only screen and (max-width: 600px) {
    main section.section-1 .section-1-main .section-1-content {
        row-gap: 20px;
    }
    main section.section-1 .section-1-main .section-1-content .section-1-form {
        flex-direction: column;
        row-gap: 15px;
    }
    main section.section-1 .section-1-main .section-1-content .section-1-form input, main section.section-1 .section-1-main .section-1-content .section-1-form button {
        width: 100%;
    }
    main section.section-1 .section-1-main .section-1-imgs {
        width: 80%;
    }
    main section.section-1 footer {
        flex-direction: column;
        row-gap: 25px;
    }
}
</style>
   <script>
    const navEl = document.getElementById("nav-mobile-menu");
const nav = document.getElementsByTagName("nav");

navEl.addEventListener("click", () => {
    nav[1].classList.toggle("active");
});
   </script> 
</body>
</html>