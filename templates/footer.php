<style>
    .gradient-text 
    {
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text; /* for newer browsers */
    }

    .payments
    {
        display:block;
        margin:auto;
        padding-top:10px;
        /* border-radius: 2%;  currently looks clapped*/ 
    }

    footer
    {
        position:fixed;
        width:100%;
        left: 0;
        bottom: 0;
        text-align:center;
        
    }

    .footer-links
    {
        display:flex;
        justify-content: center;
        gap: 25%;
        padding-top:10px;
        color:black;
    }

    a,
    a:link,
    a:hover,
    a:visited
    {
        text-decoration:none;
        color:black;
    }

    ul
    {
        list-style:none;
    }
    p
    {
        padding-left:20%;
    }

</style>

<footer style="background: linear-gradient(315deg, #8358B2, #BC63FF);">
    <!-- supported payments img -->
    <img class="payments" src="/leveluploot/images/payment_providers.png" alt="accepted payments image">
    <div class="footer-links">
        <div>
            <p><strong>Support</strong></p>
            <ul>
                <li>Contact Us</li>
                <li>Privacy Policy</li>
                <li>Refund Policy</li>
                <li>Terms of Service</li>
            </ul>
        </div>
        <div>
            <p><strong>About</strong></p>
            <ul>
                <li>About Us</li>
                <li>Our Teams</li>
                <li>Company Mission</li>
            </ul>
            
        </div>
        <div>
            <p><strong>Follow Us</strong></p>
            <ul>
                <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
                <li><a href="https://www.discord.com" target="_blank">Discord</a></li>
                <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                
            </ul>
        </div>
    </div>
    <br>
    <small>
      Copyright © 2026 LevelUp Loot. All Rights Reserved.
    </small>
</footer>