define(['lang=es/main'],function () {;(function($,w,d) {var homecitiesmapModel=fifa.model.extend({initialize:function(options) {var _this=this;fifa.model.prototype.initialize.apply(_this,[options]);},name:'homecitiesmap',view_name:'homecitiesmap:view'});w.models.homecitiesmap=new homecitiesmapModel();}(window.jQuery||window.jm,window,document));;(function($,w,d) {var homecitiesmapView=fifa.view.extend({page:null,initialize:function(options) {var _this=this;fifa.view.prototype.initialize.apply(_this,[options]);},events:{'click a.map-item':'goLinkIpad','touchstart a.map-item':'goLinkIpad'},goLinkIpad:function(e) {e.stopPropagation();e.preventDefault();var venueHref=$(e.target).closest('a').attr("href");window.location.href=venueHref;},name:'homecitiesmap:view',model_name:'homecitiesmap'});w.views.homecitiesmap=new homecitiesmapView({ el:'.venues-map'});}(window.jQuery||window.jm,window,document)); });
