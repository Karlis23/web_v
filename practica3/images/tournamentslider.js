define(['lang=es/slider'],function () {;(function($,w,d) {var tournamentsliderModel=fifa.model.extend({initialize:function(options) {fifa.model.prototype.initialize.apply(this,[options]);},name:'tournamentslider',view_name:'tournamentslider:view'});w.models.tournamentslider=new tournamentsliderModel();}(window.jQuery||window.jm,window,document));;(function($,w,d) {var tournamentsliderView=fifa.view.extend({page:null,$list:null,$tournamentInfo:null,$tournamentArticle:null,$tournamentWinners:null,xhr_article:null,xhr_winners:null,initialize:function(options) {var _this=this,pathname=w.location.pathname;fifa.view.prototype.initialize.apply(_this,[options]);_this.$list=_this.$el.find(".slider-list");var $sliderDefault=_this.$list.find("li[data-sliderdefault='true']");_this.$tournamentInfo=_this.$el.find('.tournament-info');_this.$tournamentArticle=_this.$tournamentInfo.find('.tournament-article');_this.$tournamentWinners=_this.$tournamentInfo.find('.tournament-winners');if($sliderDefault.length>0) {var articleLibUrl=$sliderDefault.attr("data-articlelibrary");var winnersLibUrl=$sliderDefault.attr("data-winnerslibrary");_this.loadTournamentInfos(articleLibUrl,winnersLibUrl);}},events:{},sliderOnItemClick:function(e) {e.preventDefault();var $target=$(e.target);if(!$target.is('li')) {$target=$target.closest('li');}if(!$target.attr("data-articlelibrary")) { return;}var articleLibUrl=$target.attr("data-articlelibrary");var winnersLibUrl=$target.attr("data-winnerslibrary");this.loadTournamentInfos(articleLibUrl,winnersLibUrl);},sliderOnMove:function(e) {var _this=this,itemsPerPage=_this.$el.attr("data-itemsperpage"),page=_this.$el.attr("data-currentpage"),index=((itemsPerPage * page) - (itemsPerPage));if(!isNaN(index)) {var $li=_this.$list.find("li:eq(" + index + ")"),articleLibUrl=$li.attr("data-articlelibrary"),winnersLibUrl=$li.attr("data-winnerslibrary");_this.$list.find("li").removeClass("selected");$li.addClass("selected");_this.loadTournamentInfos(articleLibUrl,winnersLibUrl);}},loadTournamentInfos:function(articleLibUrl,winnersLibUrl) {var _this=this,cache_key_article=['trn_slider_article',articleLibUrl].join('.'),cache_key_winners=['trn_slider_winners',winnersLibUrl].join('.'),cached_article=fifa.cacheMap.get(cache_key_article),cached_winners=fifa.cacheMap.get(cache_key_winners);if(articleLibUrl) {if(_this.xhr_article) { _this.xhr_article.abort();}if(cached_article) {_this.$tournamentArticle.html(cached_article);}else {_this.xhr_article=$.get(articleLibUrl.withIgn(),function(data) {if(data.indexOf("<!doctype")==-1) {fifa.cacheMap.set(cache_key_article,data);_this.$tournamentArticle.html(data);}});}}if(winnersLibUrl) {if(_this.xhr_winners) { _this.xhr_winners.abort();}if(cached_winners) {_this.$tournamentWinners.html(cached_winners);}else {_this.xhr_winners=$.get(winnersLibUrl.withIgn(),function(data) {if(data.indexOf("<!doctype")==-1) {fifa.cacheMap.set(cache_key_winners,data);_this.$tournamentWinners.html(data);}});}}},name:'tournamentslider:view',model_name:'tournamentslider'});w.views.tournamentslider=new tournamentsliderView({el:'.tournament-slider',bind:['slider:itemClick','slider:move']});}(window.jQuery||window.jm,window,document)); });
