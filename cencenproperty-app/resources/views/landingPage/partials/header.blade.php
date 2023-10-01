<!-- NavBar -->
<div class="shadow container-fluid">
    <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden" >
    <div class="container-fluid" style="justify-content: flex-end;">
        <a class="navbar-brand" href="/">
            <!-- Brand Logo -->
            <div id="crop">
                <img src="/img/live_logo.png" alt="Live@" id="logo">
            </div>
        </a>
        
        <button class="btn btn-primary ms-auto buttongold" id="btn-titip"><a href="https://wa.me/6282134829391/?text=Hello World" class="text-decoration-none text-white">Titip Jual</a></button>
    
    <!-- Button trigger modal -->
    <button
        type="button"
        class="btn "
        data-bs-toggle="modal"
        data-bs-target="#staticBackdrop"
        style="background-color: transparent; "
        ;
    >
        <i
            class="fa-brands fa-instagram fa-2xl"
            style="color: #bc9c22"
        ></i>
    </button>

    <!-- Modal -->
    <div
        class="modal fade p-3 "
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
        
    >
        <div
            class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        <i
                            class="fa-brands fa-instagram fa-bounce fa-lg"
                        ></i>
                        Cencen Property
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body" id="instafeed-container"></div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn"
                        data-bs-dismiss="modal"
                        style="background-color: #bc9c22; color: white"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
    <script type="text/javascript">
        var userFeed = new Instafeed({
            get: "user",
            target: "instafeed-container",
            resolution: "low_resolution",
            accessToken:
                "IGQWRPTk8xNUJXSjdQa3oxQmlXRjJLMnBqNDFkSDd0WFdlNVRNVUswQWNhOFJjUFdIdWFRTG1EOHNTSW15VTg5R2N4aXg5WHZAKMVFLRVNmNTh0Yl9sb3JMcFZADOUVLVC1IUzIybDZA6ZATVyaEVXOW84OE9GcDhFSmcZD",
        });
        userFeed.run();
    </script>

        <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse"
        data-bs-target="#toggleMobileMenu"
        aria-controls="toggleMobileMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
        style="padding:0;"
        
        >
        <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="toggleMobileMenu">
            
            <ul class="navbar-nav ms-auto text-left">
                <li>
                    <a href="/" class="nav-link">
                        Home
                    </a>
                </li>
            </ul>
        </div>  
    </div>
   
    </nav>
</div>