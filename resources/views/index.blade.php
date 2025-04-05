<x-layout>
    <div class="d-flex justify-content-center">
        <h3>Page name</h3>
    </div>
    <hr />

    {{-- TODO:Modificar a url para quando clicar na imagem do produto mostrar os detalhes, url:/product/id --}}
    <div class="container d-flex">
        <div class="card border-0">
            <div id="clotheImage">
                <a href="#" style="opacity: 1; transition: opacity 0.3s ease;" id="hoverImage"><img
                        src="storage/images/roupa.jpeg" alt="Clothes Image"></a>
            </div>

            <div class="container">
                <h4>Roupa</h4>
                <p style="margin-top: -10px">5000¥</p>
                <a href="#" class="btn btn-primary">Buy now</a>
                <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
        </div>


    </div>

    <script>
        // Show "Update Image" text when hovering over the image
        document.getElementById('clotheImage').addEventListener('mouseover', function() {
            document.getElementById('hoverImage').style.opacity = 1;
            this.style.opacity = 0.7; // optional hover effect on the image
        });

        // Hide the text when not hovering
        document.getElementById('clotheImage').addEventListener('mouseout', function() {
            document.getElementById('hoverImage').style.opacity = 1;
            this.style.opacity = 1;
        });
    </script>

</x-layout>
