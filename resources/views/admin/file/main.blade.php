

<link rel="stylesheet" href="{{ URL::asset('css/file/demo.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/file/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/file/mfb.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/menu/jquery.contextMenu.css') }}">
<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-folderback" viewBox="0 0 20 16">
				<title>folder-back</title>
				<path d="M7.5,0C7.4,0,2,0,2,0C0.9,0,0,0.9,0,2l0,12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2c0,0-7.5,0-8,0C9,2,9.9,0,7.5,0z"/>
			</symbol>
			<symbol id="icon-foldercover" viewBox="0 0 20 16">
				<title>folder-cover</title>
				<path d="M2,2h16c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H2c-1.1,0-2-0.9-2-2V4C0,2.9,0.9,2,2,2z"/>
			</symbol>
			<symbol id="icon-folderdummy" viewBox="0 0 20 16">
				<title>folder-dummy</title>
				<path d="M7.5,0C7.4,0,2,0,2,0C0.9,0,0,0.9,0,2l0,12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2c0,0-7.5,0-8,0C9,2,9.9,0,7.5,0z"/><path d="M2,2h16c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H2c-1.1,0-2-0.9-2-2V4C0,2.9,0.9,2,2,2z"/>
			</symbol>

			<symbol id="icon-file" viewBox="0 0 20 26.8">
				<title>file</title>
				<path d="M2.3,0C1,0,0,1,0,2.3v22.2c0,1.2,1,2.3,2.3,2.3h15.4c1.2,0,2.3-1,2.3-2.3V6l-6-6H2.3z"/>
				<path style="opacity:0.1;fill:#000;" d="M13.9,3.7V0l6,6h-3.7C14.9,6,13.9,5,13.9,3.7z"/>
			</symbol>
			<symbol id="icon-padlock" viewBox="0 0 24 33.6">
				<title>padlock</title>
				<path d="M23,13.5h-1.7V9.4C21.4,4.2,17.2,0,12,0C6.8,0,2.6,4.2,2.6,9.4v4.1H1c-0.5,0-1,0.4-1,1v18.2c0,0.5,0.4,1,1,1H23c0.5,0,1-0.4,1-1V14.4C24,13.9,23.6,13.5,23,13.5z M13.5,24.5v3.9c0,0.3-0.3,0.6-0.6,0.6h-1.8c-0.3,0-0.6-0.3-0.6-0.6v-3.9c-0.7-0.5-1.1-1.3-1.1-2.1c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6C14.6,23.3,14.2,24.1,13.5,24.5z M16.9,13.5H7.1V9.4c0-2.7,2.2-4.9,4.9-4.9c2.7,0,4.9,2.2,4.9,4.9V13.5z"/>
			</symbol>
			<symbol id="icon-cloud" viewBox="0 0 24 22.2">
				<title>cloud</title>
				<path d="M19.5,5.8c-0.3-1.5-1-2.9-2.2-4c-1.3-1.2-3-1.8-4.7-1.8C11.3,0,10,0.4,8.9,1.1C8,1.7,7.2,2.5,6.6,3.5c-0.2,0-0.5-0.1-0.7-0.1c-2.1,0-3.8,1.7-3.8,3.8c0,0.3,0,0.5,0.1,0.8C0.8,9,0,10.6,0,12.3C0,13.6,0.5,15,1.4,16c1,1.1,2.2,1.7,3.6,1.8c0,0,0,0,0,0h4.2c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H5c-2-0.1-3.7-2-3.7-4.2c0-1.4,0.8-2.7,2-3.4c0.3-0.2,0.4-0.5,0.3-0.8C3.5,7.8,3.4,7.5,3.4,7.2c0-1.4,1.1-2.5,2.5-2.5c0.3,0,0.6,0,0.8,0.1c0.3,0.1,0.7,0,0.8-0.3c0.9-2,2.9-3.2,5.1-3.2c2.9,0,5.3,2.2,5.6,5.1c0,0.3,0.3,0.5,0.6,0.6c2.2,0.4,3.9,2.4,3.9,4.7c0,2.5-1.9,4.6-4.3,4.8h-3.6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h3.7c0,0,0,0,0,0c1.5-0.1,2.9-0.8,4-2c1-1.1,1.6-2.6,1.6-4.1C24,8.9,22.1,6.5,19.5,5.8z M16,12.9c0.3-0.3,0.3-0.7,0-0.9l-3.5-3.5c-0.1-0.1-0.3-0.2-0.5-0.2c-0.2,0-0.3,0.1-0.5,0.2L8,12c-0.3,0.3-0.3,0.7,0,0.9c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.3-0.1,0.5-0.2l2.4-2.4v11c0,0.4,0.3,0.7,0.7,0.7s0.7-0.3,0.7-0.7v-11l2.4,2.4C15.3,13.2,15.7,13.2,16,12.9z"/>
			</symbol>
		</svg>



<section class="content content--hari content--nandi">

    <div class="grid">
       
        @foreach($folders as $folder)
        <div class="grid__item folder_item">
            <a href="/admin/file/{{$projectname}}/{{$projectid}}/{{$folder['id']}}">
            <div class="folder folder--nandi">
                <div class="folder__icon folder__icon--perspective">
                    <div class="folder__icon-img folder__icon-img--back">
                        <svg class="folder__icon-svg"><use xlink:href="#icon-folderback"></use></svg>
                    </div>
                    <div class="folder__icon-deco"></div>
                    <div class="folder__preview folder__preview--magnifier">
                        @foreach($folder['files'] as $file_sub)
                            @if(isset($file_sub['file_ext']))
                            <p class="folder__detail">
                                <svg class="folder__detail-svg folder__detail-svg--{{$file_sub['file_ext']}}"><use xlink:href="#icon-file"></use></svg>
                                <span class="folder__detail-text">{{$file_sub['file_name']}}.{{$file_sub['file_ext']}}</span>
                            </p>
                            @endif
                        @endforeach
                    </div>
                    <div class="folder__icon-img folder__icon-img--cover">
                        <svg class="folder__icon-svg"><use xlink:href="#icon-foldercover"></use></svg>
                        <svg class="folder__icon-svg folder__icon-svg--deco"><use xlink:href="#icon-cloud"></use></svg>
                    </div>
                </div>
                <h3 class="folder__caption">{{$folder['folder_name']}}</h3>
                </a>
            </div>
        </div>
        @endforeach

        @foreach ($file as $list)
        @if(isset($list['file_ext']))
        <div class="grid__item file">
            <svg class="folder__detail-svg_big folder__detail-svg--{{$list['file_ext']}}"><use xlink:href="#icon-file"></use></svg>
            <span class="folder__detail-text">{{$list['file_name']}}.{{$list['file_ext']}}</span>
            <span class="folder__detail-text">{{$list['file_size']}}</span>
        </div>
        @endif
        @endforeach
    </div><!-- /grid-->

	
</section>


<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
	<a href="#" class="mfb-component__button--main">
	  <i class="mfb-component__main-icon--resting fa fa-plus"></i>
	  <i class="mfb-component__main-icon--active fa fa-times"></i>
	</a>
	<ul class="mfb-component__list">
	  <li>
		<a href="#" data-mfb-label="上传文件" class="mfb-component__button--child">
		  <i class="mfb-component__child-icon fa fa-files-o"></i>
		</a>
	  </li>
	  <li>
		<a href="#" data-mfb-label="新建文件夹" class="mfb-component__button--child">
		  <i class="mfb-component__child-icon fa fa-folder-open-o"></i>
		</a>
	  </li>
	</ul>
  </li>
</ul>





<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/menu/jquery.contextMenu.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/file/anime.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/file/charming.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/file/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/file/index.js') }}"></script>
<script>
	(function() {

        // new HariFx(document.querySelector('.content--hari .folder--hari'));
        if(document.querySelector('.content--nandi .folder--nandi')){
            new NandiFx(document.querySelector('.content--nandi .folder--nandi'));
        }

        menu = document.getElementById('menu');

        
        function renderMenu() {
            menu.style.display = 'none';
            // ?:-)
            setTimeout(function() {
                menu.style.display = 'block';
                menu.className = 'mfb-component--br   mfb-slidein-spring ';
            },1);
        }
        renderMenu();
		
	})();
</script>