jvm.Map=function(params){var map=this,e;this.params=jvm.$.extend(true,{},jvm.Map.defaultParams,params);if(!jvm.Map.maps[this.params.map]){throw new Error('Attempt to use map which was not loaded: '+this.params.map);}
this.mapData=jvm.Map.maps[this.params.map];this.markers={};this.regions={};this.regionsColors={};this.regionsData={};this.container=jvm.$('<div>').addClass('jvectormap-container');if(this.params.container){this.params.container.append(this.container);}
this.container.data('mapObject',this);this.defaultWidth=this.mapData.width;this.defaultHeight=this.mapData.height;this.setBackgroundColor(this.params.backgroundColor);this.onResize=function(){map.updateSize();}
jvm.$(window).resize(this.onResize);for(e in jvm.Map.apiEvents){if(this.params[e]){this.container.bind(jvm.Map.apiEvents[e]+'.jvectormap',this.params[e]);}}
this.canvas=new jvm.VectorCanvas(this.container[0],this.width,this.height);if(this.params.bindTouchEvents){if(('ontouchstart'in window)||(window.DocumentTouch&&document instanceof DocumentTouch)){this.bindContainerTouchEvents();}else if(window.MSGesture){this.bindContainerPointerEvents();}}
this.bindContainerEvents();this.bindElementEvents();this.createTip();if(this.params.zoomButtons){this.bindZoomButtons();}
this.createRegions();this.createMarkers(this.params.markers||{});this.updateSize();if(this.params.focusOn){if(typeof this.params.focusOn==='string'){this.params.focusOn={region:this.params.focusOn};}else if(jvm.$.isArray(this.params.focusOn)){this.params.focusOn={regions:this.params.focusOn};}
this.setFocus(this.params.focusOn);}
if(this.params.selectedRegions){this.setSelectedRegions(this.params.selectedRegions);}
if(this.params.selectedMarkers){this.setSelectedMarkers(this.params.selectedMarkers);}
this.legendCntHorizontal=jvm.$('<div/>').addClass('jvectormap-legend-cnt jvectormap-legend-cnt-h');this.legendCntVertical=jvm.$('<div/>').addClass('jvectormap-legend-cnt jvectormap-legend-cnt-v');this.container.append(this.legendCntHorizontal);this.container.append(this.legendCntVertical);if(this.params.series){this.createSeries();}};jvm.Map.prototype={transX:0,transY:0,scale:1,baseTransX:0,baseTransY:0,baseScale:1,width:0,height:0,setBackgroundColor:function(backgroundColor){this.container.css('background-color',backgroundColor);},resize:function(){var curBaseScale=this.baseScale;if(this.width/this.height>this.defaultWidth/this.defaultHeight){this.baseScale=this.height/this.defaultHeight;this.baseTransX=Math.abs(this.width-this.defaultWidth*this.baseScale)/(2*this.baseScale);}else{this.baseScale=this.width/this.defaultWidth;this.baseTransY=Math.abs(this.height-this.defaultHeight*this.baseScale)/(2*this.baseScale);}
this.scale*=this.baseScale/curBaseScale;this.transX*=this.baseScale/curBaseScale;this.transY*=this.baseScale/curBaseScale;},updateSize:function(){this.width=this.container.width();this.height=this.container.height();this.resize();this.canvas.setSize(this.width,this.height);this.applyTransform();},reset:function(){var key,i;for(key in this.series){for(i=0;i<this.series[key].length;i++){this.series[key][i].clear();}}
this.scale=this.baseScale;this.transX=this.baseTransX;this.transY=this.baseTransY;this.applyTransform();},applyTransform:function(){var maxTransX,maxTransY,minTransX,minTransY;if(this.defaultWidth*this.scale<=this.width){maxTransX=(this.width-this.defaultWidth*this.scale)/(2*this.scale);minTransX=(this.width-this.defaultWidth*this.scale)/(2*this.scale);}else{maxTransX=0;minTransX=(this.width-this.defaultWidth*this.scale)/this.scale;}
if(this.defaultHeight*this.scale<=this.height){maxTransY=(this.height-this.defaultHeight*this.scale)/(2*this.scale);minTransY=(this.height-this.defaultHeight*this.scale)/(2*this.scale);}else{maxTransY=0;minTransY=(this.height-this.defaultHeight*this.scale)/this.scale;}
if(this.transY>maxTransY){this.transY=maxTransY;}else if(this.transY<minTransY){this.transY=minTransY;}
if(this.transX>maxTransX){this.transX=maxTransX;}else if(this.transX<minTransX){this.transX=minTransX;}
this.canvas.applyTransformParams(this.scale,this.transX,this.transY);if(this.markers){this.repositionMarkers();}
this.repositionLabels();this.container.trigger('viewportChange',[this.scale/this.baseScale,this.transX,this.transY]);},bindContainerEvents:function(){var mouseDown=false,oldPageX,oldPageY,map=this;if(this.params.panOnDrag){this.container.mousemove(function(e){if(mouseDown){map.transX-=(oldPageX-e.pageX)/map.scale;map.transY-=(oldPageY-e.pageY)/map.scale;map.applyTransform();oldPageX=e.pageX;oldPageY=e.pageY;}
return false;}).mousedown(function(e){mouseDown=true;oldPageX=e.pageX;oldPageY=e.pageY;return false;});this.onContainerMouseUp=function(){mouseDown=false;};jvm.$('body').mouseup(this.onContainerMouseUp);}
if(this.params.zoomOnScroll){this.container.mousewheel(function(event,delta,deltaX,deltaY){var offset=jvm.$(map.container).offset(),centerX=event.pageX-offset.left,centerY=event.pageY-offset.top,zoomStep=Math.pow(1+map.params.zoomOnScrollSpeed/1000,event.deltaFactor*event.deltaY);map.tip.hide();map.setScale(map.scale*zoomStep,centerX,centerY);event.preventDefault();});}},bindContainerTouchEvents:function(){var touchStartScale,touchStartDistance,map=this,touchX,touchY,centerTouchX,centerTouchY,lastTouchesLength,handleTouchEvent=function(e){var touches=e.originalEvent.touches,offset,scale,transXOld,transYOld;if(e.type=='touchstart'){lastTouchesLength=0;}
if(touches.length==1){if(lastTouchesLength==1){transXOld=map.transX;transYOld=map.transY;map.transX-=(touchX-touches[0].pageX)/map.scale;map.transY-=(touchY-touches[0].pageY)/map.scale;map.applyTransform();map.tip.hide();if(transXOld!=map.transX||transYOld!=map.transY){e.preventDefault();}}
touchX=touches[0].pageX;touchY=touches[0].pageY;}else if(touches.length==2){if(lastTouchesLength==2){scale=Math.sqrt(Math.pow(touches[0].pageX-touches[1].pageX,2)+
Math.pow(touches[0].pageY-touches[1].pageY,2))/touchStartDistance;map.setScale(touchStartScale*scale,centerTouchX,centerTouchY)
map.tip.hide();e.preventDefault();}else{offset=jvm.$(map.container).offset();if(touches[0].pageX>touches[1].pageX){centerTouchX=touches[1].pageX+(touches[0].pageX-touches[1].pageX)/2;}else{centerTouchX=touches[0].pageX+(touches[1].pageX-touches[0].pageX)/2;}
if(touches[0].pageY>touches[1].pageY){centerTouchY=touches[1].pageY+(touches[0].pageY-touches[1].pageY)/2;}else{centerTouchY=touches[0].pageY+(touches[1].pageY-touches[0].pageY)/2;}
centerTouchX-=offset.left;centerTouchY-=offset.top;touchStartScale=map.scale;touchStartDistance=Math.sqrt(Math.pow(touches[0].pageX-touches[1].pageX,2)+
Math.pow(touches[0].pageY-touches[1].pageY,2));}}
lastTouchesLength=touches.length;};jvm.$(this.container).bind('touchstart',handleTouchEvent);jvm.$(this.container).bind('touchmove',handleTouchEvent);},bindContainerPointerEvents:function(){var map=this,gesture=new MSGesture(),element=this.container[0],handlePointerDownEvent=function(e){gesture.addPointer(e.pointerId);},handleGestureEvent=function(e){var offset,scale,transXOld,transYOld;if(e.translationX!=0||e.translationY!=0){transXOld=map.transX;transYOld=map.transY;map.transX+=e.translationX/map.scale;map.transY+=e.translationY/map.scale;map.applyTransform();map.tip.hide();if(transXOld!=map.transX||transYOld!=map.transY){e.preventDefault();}}
if(e.scale!=1){map.setScale(map.scale*e.scale,e.offsetX,e.offsetY)
map.tip.hide();e.preventDefault();}};gesture.target=element;element.addEventListener("MSGestureChange",handleGestureEvent,false);element.addEventListener("pointerdown",handlePointerDownEvent,false);},bindElementEvents:function(){var map=this,pageX,pageY,mouseMoved;this.container.mousemove(function(e){if(Math.abs(pageX-e.pageX)+Math.abs(pageY-e.pageY)>2){mouseMoved=true;}});this.container.delegate("[class~='jvectormap-element']",'mouseover mouseout',function(e){var baseVal=jvm.$(this).attr('class').baseVal||jvm.$(this).attr('class'),type=baseVal.indexOf('jvectormap-region')===-1?'marker':'region',code=type=='region'?jvm.$(this).attr('data-code'):jvm.$(this).attr('data-index'),element=type=='region'?map.regions[code].element:map.markers[code].element,tipText=type=='region'?map.mapData.paths[code].name:(map.markers[code].config.name||''),tipShowEvent=jvm.$.Event(type+'TipShow.jvectormap'),overEvent=jvm.$.Event(type+'Over.jvectormap');if(e.type=='mouseover'){map.container.trigger(overEvent,[code]);if(!overEvent.isDefaultPrevented()){element.setHovered(true);}
map.tip.text(tipText);map.container.trigger(tipShowEvent,[map.tip,code]);if(!tipShowEvent.isDefaultPrevented()){map.tip.show();map.tipWidth=map.tip.width();map.tipHeight=map.tip.height();}}else{element.setHovered(false);map.tip.hide();map.container.trigger(type+'Out.jvectormap',[code]);}});this.container.delegate("[class~='jvectormap-element']",'mousedown',function(e){pageX=e.pageX;pageY=e.pageY;mouseMoved=false;});this.container.delegate("[class~='jvectormap-element']",'mouseup',function(){var baseVal=jvm.$(this).attr('class').baseVal?jvm.$(this).attr('class').baseVal:jvm.$(this).attr('class'),type=baseVal.indexOf('jvectormap-region')===-1?'marker':'region',code=type=='region'?jvm.$(this).attr('data-code'):jvm.$(this).attr('data-index'),clickEvent=jvm.$.Event(type+'Click.jvectormap'),element=type=='region'?map.regions[code].element:map.markers[code].element;if(!mouseMoved){map.container.trigger(clickEvent,[code]);if((type==='region'&&map.params.regionsSelectable)||(type==='marker'&&map.params.markersSelectable)){if(!clickEvent.isDefaultPrevented()){if(map.params[type+'sSelectableOne']){map.clearSelected(type+'s');}
element.setSelected(!element.isSelected);}}}});},bindZoomButtons:function(){var map=this;jvm.$('<div/>').addClass('jvectormap-zoomin').text('+').appendTo(this.container);jvm.$('<div/>').addClass('jvectormap-zoomout').html('&#x2212;').appendTo(this.container);this.container.find('.jvectormap-zoomin').click(function(){map.setScale(map.scale*map.params.zoomStep,map.width/2,map.height/2,false,map.params.zoomAnimate);});this.container.find('.jvectormap-zoomout').click(function(){map.setScale(map.scale/map.params.zoomStep,map.width/2,map.height/2,false,map.params.zoomAnimate);});},createTip:function(){var map=this;this.tip=jvm.$('<div/>').addClass('jvectormap-tip').appendTo(jvm.$('body'));this.container.mousemove(function(e){var left=e.pageX-15-map.tipWidth,top=e.pageY-15-map.tipHeight;if(left<5){left=e.pageX+15;}
if(top<5){top=e.pageY+15;}
map.tip.css({left:left,top:top});});},setScale:function(scale,anchorX,anchorY,isCentered,animate){var viewportChangeEvent=jvm.$.Event('zoom.jvectormap'),interval,that=this,i=0,count=Math.abs(Math.round((scale-this.scale)*60/Math.max(scale,this.scale))),scaleStart,scaleDiff,transXStart,transXDiff,transYStart,transYDiff,transX,transY,deferred=new jvm.$.Deferred();if(scale>this.params.zoomMax*this.baseScale){scale=this.params.zoomMax*this.baseScale;}else if(scale<this.params.zoomMin*this.baseScale){scale=this.params.zoomMin*this.baseScale;}
if(typeof anchorX!='undefined'&&typeof anchorY!='undefined'){zoomStep=scale/this.scale;if(isCentered){transX=anchorX+this.defaultWidth*(this.width/(this.defaultWidth*scale))/2;transY=anchorY+this.defaultHeight*(this.height/(this.defaultHeight*scale))/2;}else{transX=this.transX-(zoomStep-1)/scale*anchorX;transY=this.transY-(zoomStep-1)/scale*anchorY;}}
if(animate&&count>0){scaleStart=this.scale;scaleDiff=(scale-scaleStart)/count;transXStart=this.transX*this.scale;transYStart=this.transY*this.scale;transXDiff=(transX*scale-transXStart)/count;transYDiff=(transY*scale-transYStart)/count;interval=setInterval(function(){i+=1;that.scale=scaleStart+scaleDiff*i;that.transX=(transXStart+transXDiff*i)/that.scale;that.transY=(transYStart+transYDiff*i)/that.scale;that.applyTransform();if(i==count){clearInterval(interval);that.container.trigger(viewportChangeEvent,[scale/that.baseScale]);deferred.resolve();}},10);}else{this.transX=transX;this.transY=transY;this.scale=scale;this.applyTransform();this.container.trigger(viewportChangeEvent,[scale/this.baseScale]);deferred.resolve();}
return deferred;},setFocus:function(config){var bbox,itemBbox,newBbox,codes,i,point;config=config||{};if(config.region){codes=[config.region];}else if(config.regions){codes=config.regions;}
if(codes){for(i=0;i<codes.length;i++){if(this.regions[codes[i]]){itemBbox=this.regions[codes[i]].element.shape.getBBox();if(itemBbox){if(typeof bbox=='undefined'){bbox=itemBbox;}else{newBbox={x:Math.min(bbox.x,itemBbox.x),y:Math.min(bbox.y,itemBbox.y),width:Math.max(bbox.x+bbox.width,itemBbox.x+itemBbox.width)-Math.min(bbox.x,itemBbox.x),height:Math.max(bbox.y+bbox.height,itemBbox.y+itemBbox.height)-Math.min(bbox.y,itemBbox.y)}
bbox=newBbox;}}}}
return this.setScale(Math.min(this.width/bbox.width,this.height/bbox.height),-(bbox.x+bbox.width/2),-(bbox.y+bbox.height/2),true,config.animate);}else{if(config.lat&&config.lng){point=this.latLngToPoint(config.lat,config.lng);config.x=this.transX-point.x/this.scale;config.y=this.transY-point.y/this.scale;}else if(config.x&&config.y){config.x*=-this.defaultWidth;config.y*=-this.defaultHeight;}
return this.setScale(config.scale*this.baseScale,config.x,config.y,true,config.animate);}},getSelected:function(type){var key,selected=[];for(key in this[type]){if(this[type][key].element.isSelected){selected.push(key);}}
return selected;},getSelectedRegions:function(){return this.getSelected('regions');},getSelectedMarkers:function(){return this.getSelected('markers');},setSelected:function(type,keys){var i;if(typeof keys!='object'){keys=[keys];}
if(jvm.$.isArray(keys)){for(i=0;i<keys.length;i++){this[type][keys[i]].element.setSelected(true);}}else{for(i in keys){this[type][i].element.setSelected(!!keys[i]);}}},setSelectedRegions:function(keys){this.setSelected('regions',keys);},setSelectedMarkers:function(keys){this.setSelected('markers',keys);},clearSelected:function(type){var select={},selected=this.getSelected(type),i;for(i=0;i<selected.length;i++){select[selected[i]]=false;};this.setSelected(type,select);},clearSelectedRegions:function(){this.clearSelected('regions');},clearSelectedMarkers:function(){this.clearSelected('markers');},getMapObject:function(){return this;},getRegionName:function(code){return this.mapData.paths[code].name;},createRegions:function(){var key,region,map=this;this.regionLabelsGroup=this.regionLabelsGroup||this.canvas.addGroup();for(key in this.mapData.paths){region=new jvm.Region({map:this,path:this.mapData.paths[key].path,code:key,style:jvm.$.extend(true,{},this.params.regionStyle),labelStyle:jvm.$.extend(true,{},this.params.regionLabelStyle),canvas:this.canvas,labelsGroup:this.regionLabelsGroup,label:this.canvas.mode!='vml'?(this.params.labels&&this.params.labels.regions):null});jvm.$(region.shape).bind('selected',function(e,isSelected){map.container.trigger('regionSelected.jvectormap',[jvm.$(this.node).attr('data-code'),isSelected,map.getSelectedRegions()]);});this.regions[key]={element:region,config:this.mapData.paths[key]};}},createMarkers:function(markers){var i,marker,point,markerConfig,markersArray,map=this;this.markersGroup=this.markersGroup||this.canvas.addGroup();this.markerLabelsGroup=this.markerLabelsGroup||this.canvas.addGroup();if(jvm.$.isArray(markers)){markersArray=markers.slice();markers={};for(i=0;i<markersArray.length;i++){markers[i]=markersArray[i];}}
for(i in markers){markerConfig=markers[i]instanceof Array?{latLng:markers[i]}:markers[i];point=this.getMarkerPosition(markerConfig);if(point!==false){marker=new jvm.Marker({map:this,style:jvm.$.extend(true,{},this.params.markerStyle,{initial:markerConfig.style||{}}),labelStyle:jvm.$.extend(true,{},this.params.markerLabelStyle),index:i,cx:point.x,cy:point.y,group:this.markersGroup,canvas:this.canvas,labelsGroup:this.markerLabelsGroup,label:this.canvas.mode!='vml'?(this.params.labels&&this.params.labels.markers):null});jvm.$(marker.shape).bind('selected',function(e,isSelected){map.container.trigger('markerSelected.jvectormap',[jvm.$(this.node).attr('data-index'),isSelected,map.getSelectedMarkers()]);});if(this.markers[i]){this.removeMarkers([i]);}
this.markers[i]={element:marker,config:markerConfig};}}},repositionMarkers:function(){var i,point;for(i in this.markers){point=this.getMarkerPosition(this.markers[i].config);if(point!==false){this.markers[i].element.setStyle({cx:point.x,cy:point.y});}}},repositionLabels:function(){var key;for(key in this.regions){this.regions[key].element.updateLabelPosition();}
for(key in this.markers){this.markers[key].element.updateLabelPosition();}},getMarkerPosition:function(markerConfig){if(jvm.Map.maps[this.params.map].projection){return this.latLngToPoint.apply(this,markerConfig.latLng||[0,0]);}else{return{x:markerConfig.coords[0]*this.scale+this.transX*this.scale,y:markerConfig.coords[1]*this.scale+this.transY*this.scale};}},addMarker:function(key,marker,seriesData){var markers={},data=[],values,i,seriesData=seriesData||[];markers[key]=marker;for(i=0;i<seriesData.length;i++){values={};if(typeof seriesData[i]!=='undefined'){values[key]=seriesData[i];}
data.push(values);}
this.addMarkers(markers,data);},addMarkers:function(markers,seriesData){var i;seriesData=seriesData||[];this.createMarkers(markers);for(i=0;i<seriesData.length;i++){this.series.markers[i].setValues(seriesData[i]||{});};},removeMarkers:function(markers){var i;for(i=0;i<markers.length;i++){this.markers[markers[i]].element.remove();delete this.markers[markers[i]];};},removeAllMarkers:function(){var i,markers=[];for(i in this.markers){markers.push(i);}
this.removeMarkers(markers)},latLngToPoint:function(lat,lng){var point,proj=jvm.Map.maps[this.params.map].projection,centralMeridian=proj.centralMeridian,inset,bbox;if(lng<(-180+centralMeridian)){lng+=360;}
point=jvm.Proj[proj.type](lat,lng,centralMeridian);inset=this.getInsetForPoint(point.x,point.y);if(inset){bbox=inset.bbox;point.x=(point.x-bbox[0].x)/(bbox[1].x-bbox[0].x)*inset.width*this.scale;point.y=(point.y-bbox[0].y)/(bbox[1].y-bbox[0].y)*inset.height*this.scale;return{x:point.x+this.transX*this.scale+inset.left*this.scale,y:point.y+this.transY*this.scale+inset.top*this.scale};}else{return false;}},pointToLatLng:function(x,y){var proj=jvm.Map.maps[this.params.map].projection,centralMeridian=proj.centralMeridian,insets=jvm.Map.maps[this.params.map].insets,i,inset,bbox,nx,ny;for(i=0;i<insets.length;i++){inset=insets[i];bbox=inset.bbox;nx=x-(this.transX*this.scale+inset.left*this.scale);ny=y-(this.transY*this.scale+inset.top*this.scale);nx=(nx/(inset.width*this.scale))*(bbox[1].x-bbox[0].x)+bbox[0].x;ny=(ny/(inset.height*this.scale))*(bbox[1].y-bbox[0].y)+bbox[0].y;if(nx>bbox[0].x&&nx<bbox[1].x&&ny>bbox[0].y&&ny<bbox[1].y){return jvm.Proj[proj.type+'_inv'](nx,-ny,centralMeridian);}}
return false;},getInsetForPoint:function(x,y){var insets=jvm.Map.maps[this.params.map].insets,i,bbox;for(i=0;i<insets.length;i++){bbox=insets[i].bbox;if(x>bbox[0].x&&x<bbox[1].x&&y>bbox[0].y&&y<bbox[1].y){return insets[i];}}},createSeries:function(){var i,key;this.series={markers:[],regions:[]};for(key in this.params.series){for(i=0;i<this.params.series[key].length;i++){this.series[key][i]=new jvm.DataSeries(this.params.series[key][i],this[key],this);}}},remove:function(){this.tip.remove();this.container.remove();jvm.$(window).unbind('resize',this.onResize);jvm.$('body').unbind('mouseup',this.onContainerMouseUp);}};jvm.Map.maps={};jvm.Map.defaultParams={map:'world_mill_en',backgroundColor:'#505050',zoomButtons:true,zoomOnScroll:true,zoomOnScrollSpeed:3,panOnDrag:true,zoomMax:8,zoomMin:1,zoomStep:1.6,zoomAnimate:true,regionsSelectable:false,markersSelectable:false,bindTouchEvents:true,regionStyle:{initial:{fill:'white',"fill-opacity":1,stroke:'none',"stroke-width":0,"stroke-opacity":1},hover:{"fill-opacity":0.8,cursor:'pointer'},selected:{fill:'yellow'},selectedHover:{}},regionLabelStyle:{initial:{'font-family':'Verdana','font-size':'12','font-weight':'bold',cursor:'default',fill:'black'},hover:{cursor:'pointer'}},markerStyle:{initial:{fill:'grey',stroke:'#505050',"fill-opacity":1,"stroke-width":1,"stroke-opacity":1,r:5},hover:{stroke:'black',"stroke-width":2,cursor:'pointer'},selected:{fill:'blue'},selectedHover:{}},markerLabelStyle:{initial:{'font-family':'Verdana','font-size':'12','font-weight':'bold',cursor:'default',fill:'black'},hover:{cursor:'pointer'}}};jvm.Map.apiEvents={onRegionTipShow:'regionTipShow',onRegionOver:'regionOver',onRegionOut:'regionOut',onRegionClick:'regionClick',onRegionSelected:'regionSelected',onMarkerTipShow:'markerTipShow',onMarkerOver:'markerOver',onMarkerOut:'markerOut',onMarkerClick:'markerClick',onMarkerSelected:'markerSelected',onViewportChange:'viewportChange'};