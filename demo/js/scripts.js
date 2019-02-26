(function(){
  $(document).ready(function(){

      $(".show-btn").each(function(){// show more details on click
          $(this).on("click",function(){
             if($(this).hasClass( "fa-chevron-up")){
                $(this).removeClass("fa-chevron-up");
                $(this).addClass("fa-chevron-down");
                $(this).parent().next(".show-panel").toggle(300);
              }
              else{
                $(this).removeClass("fa-chevron-down");
                $(this).addClass("fa-chevron-up");
                $(this).parent().next(".show-panel").toggle(300);
              }
          });
      });

      function changeCurrency (){ //changeCurrency table details
        $(".item-details__panel").find("select").each(function(){
            var priceInBucks = $(this).parents("tbody").children(".collapse-btn-show").children("td:nth-child(8)").text();
            var BTC = (parseInt(priceInBucks/3743.52 * 100000)) / 100000;
            var ETH = (parseInt(priceInBucks*0.82* 10000)) / 10000;
            var EOS = priceInBucks/2.5;
            var CWEX = priceInBucks/0.16;
            $(this).parent().prev(".item-details__rs-current-price-value").text(priceInBucks);
            $(this).parent().prev(".item-details__bid").text(" ");
            $(this).on('change',function(){
                   if ($(this).val() == "USDC") {
                    $(this).css("color", "#2a7a2a");
                    $(this).siblings(".fa").css("color", "#2a7a2a");
                    $(this).parent().css("border-color", "#2a7a2a");
                    $(this).parent().prev(".item-details__rs-current-price-value").css("color", "#2a7a2a");
                    $(this).parent().prev(".item-details__rs-current-price-value").text(priceInBucks);
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").css({"color" : "#2a7a2a" , "border-color" : "#2a7a2a"});
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").text("USDC");
                  }else if ($(this).val() == "BTC") {
                    $(this).css("color", "#d2aa0c");
                    $(this).siblings(".fa").css("color", "#d2aa0c");
                    $(this).parent().css("border-color", "#d2aa0c");
                    $(this).parent().prev(".item-details__rs-current-price-value").css("color", "#d2aa0c");
                    $(this).parent().prev(".item-details__rs-current-price-value").text(BTC);
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").css({"color" : "#d2aa0c" , "border-color" : "#d2aa0c"});
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").text("BTC");
                  }else if($(this).val() == "ETH"){
                    $(this).css("color", "#aa2d98");
                    $(this).siblings(".fa").css("color", "#aa2d98");
                    $(this).parent().css("border-color", "#aa2d98");
                    $(this).parent().siblings(".item-details__rs-current-price-value").css("color", "#aa2d98");
                    $(this).parent().prev(".item-details__rs-current-price-value").text(ETH);
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").css({"color" : "#aa2d98" , "border-color" : "#aa2d98"});
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").text("ETH");
                  }else if($(this).val()=="EOS"){
                    $(this).css("color", "rgb(143, 143, 255)");
                    $(this).siblings(".fa").css("color", "rgb(143, 143, 255)");
                    $(this).parent().css("border-color", "rgb(143, 143, 255)");
                    $(this).parent().siblings(".item-details__rs-current-price-value").css("color", "rgb(143, 143, 255)");
                    $(this).parent().prev(".item-details__rs-current-price-value").text(EOS);
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").css({"color" : "rgb(143, 143, 255)" , "border-color" : "rgb(143, 143, 255)"});
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").text("EOS");
                  }else{
                    $(this).css("color", "rgb(223, 55, 55)");
                    $(this).siblings(".fa").css("color", "rgb(223, 55, 55)");
                    $(this).parent().css("border-color", "rgb(223, 55, 55)");
                    $(this).parent().siblings(".item-details__rs-current-price-value").css("color", "rgb(223, 55, 55)");
                    $(this).parent().parent().next(".item-details__form-current-currency").css("border-color", "rgb(223, 55, 55)");
                    $(this).parent().prev(".item-details__rs-current-price-value").text(CWEX);
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").css({"color" : "rgb(223, 55, 55)" , "border-color" : "rgb(223, 55, 55)"});
                    $(this).parents(".item-details__rs").next(".item-details__form").children(".item-details__form-current-currency").text("CWEX");
                  }
             });
        });
      };

      //block not active link
      $("a").not(".site-nav__img-link ,a[href$='.html'] , .site-nav-link--current").each(function(){
          $(this).on("click",function(evt){
              evt.preventDefault();
              $(".modal-overlay").css("display", "block");
              $(".modal-error").css("display", "block");    
          });
      });

      //modal - bemo version
      $(".modal-overlay").click(function(){
          $(this).css("display", "none");
          $(".modal-error").css("display", "none");
          $(".modal-сategories").css("display", "none");
      });

      $(".modal-error__close-btn , .modal-сategories__close-btn").click(function(){
          $(".modal-overlay").css("display", "none");
          $(".modal-error").css("display", "none");
          $(".modal-сategories").css("display", "none")
      });

      //check categories to show
      function modalCategoriesShow(){
            $(".modal-overlay").css("display", "block");
            $(".modal-сategories").css("display", "block");
      };

      //dont toggle the info row by clicking the btn
      function tableBtnStopPropagation(){
        $(".filters__table-btn").each(function(){
            $(this).on("click",function(evt){
              evt.stopPropagation();
            });
        });
      };

      $('.sortable').sortable();//dragable
        function tableSorter(){//sorting by bodies
          var $table = $('.filters__table' ).tablesorter({
               cssInfoBlock : "tablesorter-no-sort",
                widgets: [ 'sortTbody', 'filter'],
                widgetOptions: {
                  sortTbody_sortRows : false,
                  filter_columnFilters : false,
                  filter_saveFilters : true
                }
          });
          $.tablesorter.filter.bindSearch( $table, $('.search')); 
      };

      function changeCurrencyTamplate(){//change currency in table  
              var theValue =  $(this);
              var priceInBucks = $(this).text();
              var BTC = (priceInBucks/3743.52).toFixed(4);
              var ETH = (priceInBucks*0.82).toFixed(3);
              var EOS = priceInBucks/2.5;
              var CWEX = priceInBucks/0.16;
              $(this).text(priceInBucks);
              $(".filters__currency-select").on("change",function(){
                $('.tablesorter').trigger('update');
                $(".filters__input").val("");
                var select = $(".filters__currency-select").val();
                      if (select == "USDC") {
                        $(theValue).text(priceInBucks);
                      }else if (select == "BTC") {
                         $(theValue).text(BTC); 
                      }else if(select == "ETH"){  
                         $(theValue).text(ETH); 
                      }else if(select =="EOS"){  
                         $(theValue).text(EOS); 
                      }else{
                         $(theValue).text(CWEX); 
                      };
              });
      };

      function changeCurrencyTable(){
            $(".filters__table tbody").find("td:nth-child(8)").each(changeCurrencyTamplate);
            $(".filters__table tbody").find("td:nth-child(13)").each(changeCurrencyTamplate);
            $(".filters__table tbody").find("td:nth-child(14)").each(changeCurrencyTamplate);
      };

      function printTable(){// init table with  external data
        var html = '';
        for(var row in data) {
          html += '<tbody>\r\n';
          html += '<tr class="collapse-btn-show">\r\n';
          for(var item in data[row]) {
            var i= 0;
            i++;
            html += '<td>' + data[row][item] + '</td>\r\n';
          }
          html += '<td><span class="filters__table-btn">Bid</span></td>';
          html += '</tr>\r\n';
          html+='<tr class="collapse-content"><td colspan="8"><div class="item-details"><div class="item-details__panel clearfix show-panel"><div class="item-details__ls"><div class="item-details__info-title-wrapper"><h3 class="item-details__info-title">Title</h3><p class="item-details__info-description">Descripton</p></div><div class="item-details__extra-info-wrapper"><div class="item-details__extra-img-wrapper"><img class="item-details__extra-info-img" src="" alt="wine"></div><div class="item-details__extra-table-wrapper"><table class="item-details__extra-info"><tr><td>Grape</td><td class="item-details__grape-value">Grape</td></tr><tr><td>Region</td><td class="item-details__region-value">Region</td></tr><tr><td>Format</td><td class="item-details__format-value">Format</td></tr><tr><td>Link</td><td class="item-details__link-value"><a href=" ">Link</a></td></tr><tr><td>Storage</td><td class="item-details__storage-value">Storage</td></tr></table></div></div></div><div class="item-details__rs"><div class="item-details__rs-current"><span class="item-details__rs-current-price">Offer price:</span><span class="item-details__rs-current-price-value" id="current-price-value">1.25</span><div class="item-details__rs-current-select-wr"><select class="item-details__select-price"><option value="USDC">USDC</option><option value="BTC">BTC</option><option value="ETH">ETH</option><option value="EOS">EOS</option><option value="CWEX">CWEX</option></select><i class="fa fa-chevron-down"></i></div></div><div class="item-details__chart-wrapper"><canvas class="item-details__chart" width="300" height="200"></canvas> </div></div><form class="item-details__form" action="" method=""><input class="item-details__bid" type="number" min="0" step="0.01" value="" placeholder="Bid"><span class="item-details__form-current-currency">BTC</span><input class="item-details__form-submit" type="submit" value="BID"></form></div></div></td></tr> '
          html += '</tbody>\r\n';
        }
        $('.filters__marketItems .filters__table').append(html);
        checkboxChecker();
      };

      function showContent (){//show details
        $(".filters__table").find(".collapse-btn-show").each(function(){
            $(this).on("click",function(){
                $(".collapse-btn-show").not($(this)).removeClass("border-top");
                $(".collapse-content").not($(this).next(".collapse-content")).css("display", "none");
                $(this).next(".collapse-content").toggle(300);
                $(this).toggleClass( "border-top");
               });
        });
      };
   
      function putValues(){
        $(".filters__table").find(".item-details__info-title").each(function(){
             var value = $(this).parents("tbody").children(".collapse-btn-show").children("td:nth-child(2)").text();
             $(this).text(value);
        });

        $(".filters__table").find(".item-details__info-description").each(function(){
             var value = $(this).parents("tbody").children(".collapse-btn-show").children("td:nth-child(16)").text();
             $(this).text(value);
        });


        $(".filters__table").find(".item-details__grape-value").each(function(){
             var value = $(this).parents("tbody").parents("tbody").children(".collapse-btn-show").children("td:nth-child(17)").text();
             $(this).text(value);
        });

        $(".filters__table").find(".item-details__region-value").each(function(){
             var value = $(this).parents("tbody").parents("tbody").children(".collapse-btn-show").children("td:nth-child(19)").text();
             $(this).text(value);
        });

        $(".filters__table").find(".item-details__format-value").each(function(){
            var value = $(this).parents("tbody").parents("tbody").children(".collapse-btn-show").children("td:nth-child(9)").text();
            $(this).text(value);
        });

        $(".filters__table").find(".item-details__link-value").each(function(){
            var value = $(this).parents("tbody").parents("tbody").children(".collapse-btn-show").children("td:nth-child(18)").text();
            $(this).children("a").text(value);
            $(this).children("a").attr( "href", value);
        });

        $(".filters__table").find(".item-details__storage-value").each(function(){
            var value = $(this).parents("tbody").parents("tbody").children(".collapse-btn-show").children("td:nth-child(16)").text();
            $(this).text(value);
        });

        $(".filters__table").find(".item-details__extra-info-img").each(function(){
          var value = $(this).parents("tbody").children(".collapse-btn-show").children("td:nth-child(1)").text();
          var wayValue = "images/wine_photos/" + value +".png";
          $(this).attr('src',wayValue);
        });
      };

      function chartCreating(){//graphs
        var info = {
          labels: ["0", "1", "2", "3", "4","5","6","7"],
          label: "red",
          datasets: [{
            label: "Graph",
             data: [ 
             {x: 0, y: 1}, 
             {x: 1, y: 3}, 
             {x: 2, y: 2}, 
             {x: 3, y: 4},
             {x: 4, y: 3},
             {x: 5, y: 5},
             {x: 6, y: 3},
             {x: 7, y: 4}
             ], 
             backgroundColor: '#dddada', 
             borderColor: '#dddada', 
             borderWidth: 2, 
             fill: false, 
          }]
        };

        var chartOptions = {
          legend: {
            display: false,
            position: 'top',
          },
          scales: { 
             xAxes: [{ 
             type: 'linear', 
             position: 'bottom', 
             ticks: { 
              min: 0, 
              max: 7, 
              stepSize: 1, 
              fixedStepSize: 1,
              fontColor: "#8a8787",
              fontSize: 12,
              stepSize: 1,
              beginAtZero: true
             }, 
             gridLines: { 
              display: false,
              color: '#979797',
              lineWidth: 2 
             } 
             }], 
             yAxes: [{ 
             afterUpdate: function(scaleInstance) { 
              // console.dir(scaleInstance); 
             }, 
             ticks: { 
              min: 0, 
              max: 8, 
              stepSize: 1, 
              fixedStepSize: 2,
              fontColor: "#8a8787",
              fontSize: 12,
              stepSize: 1,
              beginAtZero: true 
             }, 
             gridLines: {
              display: false,
              color: '#979797', 
              lineWidth: 2
             } 
             }] 
            }
        };

        var graph = $(".item-details__chart");

        var chartCreate = function(){
          for (var i = 0; graph.length > i; i++) {
              var lineChart = new Chart(graph[i], {
                type: 'line',
                data: info,
                options: chartOptions
              });
          
          }
        }
        chartCreate();
      };

      function printTableOwnCave() {//init table in ownCave
          var html = '';
          for(var row in data_ownCave) {
            html += '<tbody>\r\n';
            html += '<tr class="collapse-btn-show">\r\n';
            for(var item in data_ownCave[row]) {
              var i= 0;
              i++;
              html += '<td>' + data_ownCave[row][item] + '</td>\r\n';
            }
            html += '</tr>\r\n';
            html+='<tr class="collapse-content"><td colspan="7"><div class="item-details"><div class="item-details__panel clearfix show-panel"><div class="item-details__ls"><div class="item-details__info-title-wrapper"><h3 class="item-details__info-title">Title</h3><p class="item-details__info-description">Descripton</p></div><div class="item-details__extra-info-wrapper"><div class="item-details__extra-img-wrapper"><img class="item-details__extra-info-img" src="" alt="wine"></div><div class="item-details__extra-table-wrapper"><table class="item-details__extra-info"><tr><td>Grape</td><td class="item-details__grape-value">Grape</td></tr><tr><td>Region</td><td class="item-details__region-value">Region</td></tr><tr><td>Format</td><td class="item-details__format-value">Format</td></tr><tr><td>Link</td><td class="item-details__link-value"><a href=" ">Link</a></td></tr><tr><td>Storage</td><td class="item-details__storage-value">Storage</td></tr></table></div><span class="item-details__btn-shipping">Request shipping</span></div></div><div class="item-details__rs"><div class="item-details__rs-current"><span class="item-details__rs-current-price">Offer price:</span><span class="item-details__rs-current-price-value" id="current-price-value">1.25</span><div class="item-details__rs-current-select-wr"><select class="item-details__select-price"><option value="USDC">USDC</option><option value="BTC">BTC</option><option value="ETH">ETH</option><option value="EOS">EOS</option><option value="CWEX">CWEX</option></select><i class="fa fa-chevron-down"></i></div></div><div class="item-details__chart-wrapper"><canvas class="item-details__chart" width="300" height="200"></canvas> </div></div><form class="item-details__form" action="" method=""><input class="item-details__bid" type="number" min="0" step="0.01" value="" placeholder="Bid"><span class="item-details__form-current-currency">BTC</span><input class="item-details__form-submit" type="submit" value="SELL OFFER"></form></div></div></td></tr> '
            html += '</tbody>\r\n';
          }
          $('.filters__ownCave .filters__table').append(html);
          checkboxChecker();
      };

      var data_ownCave;
        $.ajax({
            type: "GET",  
            url: "Wine_list-own-cave.csv",
            dataType: "text",       
            success: function(csv)  
          {
            data_ownCave = $.csv.toArrays(csv);
          }   
      });

      var data;
        $.ajax({
            type: "GET",  
            url: "Wine_list_2.csv",
            dataType: "text",       
            success: function(csv)  
          {
            data = $.csv.toArrays(csv);

            printTable();
            printTableOwnCave();
            showContent();
            putValues();
            chartCreating();
            tableSorter();
            hideRowOnfocus();
            changeCurrency();
            changeCurrencyTable();
            tableBtnStopPropagation();
            inputBidFocus();
          }   
      });

      function checkboxChecker(){//check checkbox status to display 
         var checkboxes = $(".categories__list .categories__input");
         var checked = $( "input:checked" ).length;
         var checkeMax = 7;
         for (var i =0; checkboxes.length > i; i++) {
          var childNumber = i +1; 
          var search =".filters__table-search-row th:nth-child(" + childNumber + ")";
          var title =".filters__table-title-row th:nth-child(" + childNumber + ")";
          var info =".collapse-btn-show td:nth-child(" + childNumber + ")";
          if (checked <= checkeMax) {
            if(checkboxes[i].checked){ 
              $(search).css("display", "table-cell");
              $(title).css("display", "table-cell");
              $(info).css("display", "table-cell");
            }else{
              $(search).css("display", "none");
              $(title).css("display", "none");
              $(info).css("display", "none");
            }
           }else{
              this.checked = false;
              modalCategoriesShow();
             
            };
         };
      };

      function inputBidFocus(){// get  current price on  input bid focused
          $(".item-details__panel").find(".item-details__bid").each(function(){
            $(this).on("focus",function(){

                var current_price= $(this).parent().siblings(".item-details__rs").children(".item-details__rs-current").children(".item-details__rs-current-price-value").text();
                this.value = current_price;
              });
          });
      };


      $(".categories__list").find(".categories__input").each(function(){
         $(this).on("change", checkboxChecker);
      });

      function hideRowOnfocus(){
        $(".filters__input").each(function(){
            $(this).on("focus",function(){
                $(".collapse-btn-show").removeClass("border-top");
                $(".collapse-content").css("display", "none");
            });
        });
      };
  });
}());