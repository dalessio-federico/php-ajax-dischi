<div class="main_content">  
    <div class="song_box" v-for="e in albumList">
        <img :src="e.poster" alt="">
        <h2>{{e.title}}</h2>
        <p>{{e.author}}</p>
        <p>{{e.year}}</p>
    </div>
</div>