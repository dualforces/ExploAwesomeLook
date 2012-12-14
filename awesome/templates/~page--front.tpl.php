
<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.plugins.js"></script>
<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.site.js"></script>
<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.wall.1.2.js"></script>
<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.1.4.3.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($){
	$('#social-stream').dcSocialStream({
		feeds: {
			twitter: {
				id: 'exploratorium'
			},
	
			rss: {
				id: 'http://explainers.wordpress.com/feed/, http://blogs.exploratorium.edu/fabricated-realities/feed/, http://blogs.exploratorium.edu/whyintercept/feed/, http://exs.exploratorium.edu/category/blog/feed/, http://blogs.exploratorium.edu/strange-attractor/feed/, http://blogs.exploratorium.edu/fluidplanet/feed/,http://blogs.exploratorium.edu/arts/feed/',
				text: 'contentSnippet'
			},
			
			
			instagram: {
				id: '#exploratorium, @exploratorium',
				out: 'intro,thumb,text,user,share,meta',
				accessToken: '186786085.91dbf99.da4d8fab71544cdba8645bd0a02f07a1',
				clientId: '91dbf99a184e43dca3cc115500a5ba58',
				comments: 3,
				likes: 10
			},
			

		
			facebook: {
				id: '22991781232'
			},
			tumblr: {
				id: 'exploratorium,explodingtorium,illusionsongs,1afterimage2',
				intro: 'Posted',
				out: 'intro,title,text,user,share',
				thumb: 400,
				video: 400,
				icon: 'tumblr.png'
			},
			youtube: {
				id: 'exploratorium',
				intro: 'Uploaded,Favorite,New Video',
				search: 'Search',
				out: 'intro,thumb,title,text,user,share',
				feed: 'uploads,favorites,newsubscriptionvideos',
				thumb: 'default',
				icon: 'youtube.png'
			},
			
			
			
		},
		rotate: {
			delay: 0
		},
		twitterId: 'exploratorium',
		control: false,
		filter: true,
		wall: true,
		order: 'date',
		max: 100,
		iconPath: '/experiments/social-river2/images/dcsns-dark/',
		imagePath: '/experiments/social-river2/images/dcsns-dark/'
	});
				 
});
</script>
<style>
#wall {
	margin-top: 20px;
	padding: 30px 0 0; min-height: 2000px;}
</style>


<!-- Begin Second Wrapper -->

<div id="wrapper">
 
  <div id="container"> 
  <!-- Begin Question Block -->

 
	
<h3>Explo Social River / Idea 2 / </h3>
<div id="wall">
	
	<div id="social-stream"></div>

<div class="clear"></div>

</div>

</div>

