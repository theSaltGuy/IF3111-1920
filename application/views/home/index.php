<section id="showcase">
        <div class="container">
            <h1>SIMPLE LAPOR !</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, maxime dolore ratione voluptatibus
                dignissimos amet pariatur eaque laboriosam minus fuga, expedita sint laborum ipsa inventore obcaecati
                sunt illo blanditiis! Iste porro dolores dicta laboriosam. Officiis adipisci harum officia nostrum
                necessitatibus eos neque assumenda non et repellendus sunt, blanditiis nobis libero, voluptatibus cumque
                nemo possimus laudantium alias nam repudiandae veniam? Eos quas minus nulla pariatur nisi commodi,
                sapiente esse explicabo inventore, nesciunt incidunt voluptatibus porro officiis illum dolorem
                voluptatum molestiae aut laudantium a nihil accusamus. Dolor quidem ducimus, nihil non consequuntur
                tempore! Veritatis, recusandae tempora accusantium tenetur a reiciendis! Voluptas, veritatis.</p>
        </div>
    </section>

    <section id="search-box">
        <div class="container">
            <form action="">
                <input type="text" placeholder="Enter Search Key">
                <button type="submit" class="button_1">Search</button>
            </form>
                <p>Tidak Menemukan yang dicari? <button type="submit" class="button_2">Buat Laporan + </button></p>
        </div>
        
    </section>


    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./img/log_html.jpg" alt="" srcset="">
                <h3>Ex1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, deleniti expedita consectetur
                    quidem facere harum sed suscipit voluptatem soluta voluptas, quo nobis dicta molestias quas tempora,
                    et alias dignissimos beatae totam. Rerum asperiores voluptas delectus illum tempore debitis, esse
                    voluptatum pariatur accusantium aperiam aut inventore maxime, unde nostrum qui sed!</p>
                    <p>Cobaaa</p>
                    <?php foreach ( $lapor as $lpr ) :?>
                        <p> <?= $lpr['nama']; ?></p> 
                    <?php endforeach;?> 
            
                </div>

            <div class="box">
                <img src="./img/log_html.jpg" alt="" srcset="">
                <h3>Ex2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, deleniti expedita consectetur
                    quidem facere harum sed suscipit voluptatem soluta voluptas, quo nobis dicta molestias quas tempora,
                    et alias dignissimos beatae totam. Rerum asperiores voluptas delectus illum tempore debitis, esse
                    voluptatum pariatur accusantium aperiam aut inventore maxime, unde nostrum qui sed!</p>
            </div>

            <div class="box">
                <img src="./img/log_html.jpg" alt="" srcset="">
                <h3>Ex3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, deleniti expedita consectetur
                    quidem facere harum sed suscipit voluptatem soluta voluptas, quo nobis dicta molestias quas tempora,
                    et alias dignissimos beatae totam. Rerum asperiores voluptas delectus illum tempore debitis, esse
                    voluptatum pariatur accusantium aperiam aut inventore maxime, unde nostrum qui sed!</p>
            </div>
        </div>
    </section>