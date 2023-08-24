<x-layout>

    <x-nav.navbar/>

    <style>
        .d-item {
    height: 100%;
}

.d-img {
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6);
}
.card {
    width: 100%;
    border-radius: 6px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
    transition: all 400ms ease;
}

.card-img-top {
    width: 60%;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
}

.card {
    padding: 1.5em .5em .5em;
    text-align: center;
    border-radius: 2em;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}

.card-tittle {
    font-weight: bold;
    font-size: 1.5em;
}

.card:hover {
    box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
    transform: translate(-3%);
}

.btn-primary {
    border-radius: 2em;
    padding: .5em 1.5em;
}
    </style>

    <br>
    <br>
    <br>

    <div class="carousel-inner" style="height: calc(100vh - 80px)">
        <div class="d-item carousel-item active ">
            <img src="https://images.unsplash.com/photo-1610116306796-6fea9f4fae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                class="d-block w-100 d-img" alt="slider 1">
            <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">
                    Generate more reading with our website!
                </p>
            </div>
        </div>
    </div>

<div class="container mt-5">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://i.pinimg.com/564x/9c/79/80/9c798091458d6eccfc8807b49f88ffb8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Medicine</h5>
          <a href="/medicine" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i.pinimg.com/564x/14/79/a6/1479a6e01a8fa516c527db53234540b0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Computer engineering</h5>
          <a href="/computerEngineering" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i.pinimg.com/564x/d3/8a/46/d38a461c5a10af84ba3a27b7c33316a3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Psychology</h5>
          <a href="/psychology" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i.pinimg.com/564x/52/be/fa/52befac00264b78116a337916a458371.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Economic</h5>
          <a href="/economic" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card h-100">
          <img src="https://i.pinimg.com/564x/89/73/cf/8973cf76b708e220419203b9d5c7491b.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">English</h5>
            <a href="/english" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="https://i.pinimg.com/564x/28/b8/9b/28b89ba7e6692bb6775ad6e5a4cae188.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Marketing and Communications</h5>
            <a href="/marketing" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
  </div>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


</x-layout>
