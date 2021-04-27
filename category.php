 <div class="col-md-3 order-2 mb-5 mb-md-0 mt-3">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0 ">
                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'fantasy'; ?>" class="d-flex "><span class="h5 text-danger">Fantasy</span>
                 <span class="text-dark ml-auto">(<?php echo numbergenre($conn,'fantasy') ?>)</span></a></li>

                

                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'scientific'; ?>" class="d-flex"><span class="h5 text-danger">Scientific</span> <span class="text-dark ml-auto">(<?php echo numbergenre($conn,'scientific') ?>)</span></a></li>
                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'biography'; ?>" class="d-flex"><span class="h5 text-danger">Biography</span> <span class="text-dark ml-auto">(<?php echo numbergenre($conn,'biography') ?>)</span></a></li>
                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'children'; ?>" class="d-flex"><span class="h5 text-danger">Children's</span> <span class="text-dark ml-auto">(<?php echo numbergenre($conn,'children') ?>)</span></a></li>
                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'psychology'; ?>" class="d-flex"><span class="h5 text-danger">Psychology</span> <span class="text-dark ml-auto">(<?php echo numbergenre($conn,'psychology') ?>)</span></a></li>
                <li class="mb-1"><a href="genre.php?book_genre=<?php echo 'all';?>" class="d-flex "><span class="h5 text-danger">All Books</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-secondary d-block">Filter by</h3>
                <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="name.php?books=<?php echo $genre; ?>" class="d-flex h6"><span>Name, A to Z</span> </a></li>
                <li class="mb-1"><a href="name2.php?books=<?php echo $genre; ?>" class="d-flex h6"><span>Name, Z to A</span> </a></li>
                <li class="mb-1"><a href="price.php?books=<?php echo $genre; ?>" class="d-flex h6"><span>Price, high to low</span> </a></li>
                <li class="mb-1"><a href="price2.php?books=<?php echo $genre; ?>" class="d-flex h6"><span>Price, low to high</span> </a></li>

              </ul>
                
            </div>
          </div>
        </div>
