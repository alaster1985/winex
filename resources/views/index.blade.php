@include('layouts.header')


<main class="main_page">
    <section class="container main-content ">
        <div class="sortable list">
            <div class="categories__wrapper">
                <h2 class="categories__title">Shown categories<span
                            class="categories__show-btn fa fa-chevron-up show-btn"></span></h2>
                <ul class="categories__list show-panel">
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-code"
                                   id="categories-code" checked>
                            <span class="categories__checkbox-indicator"></span>
                            Code</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-wine"
                                   id="categories-wine" checked disabled>
                            <span class="categories__checkbox-indicator"></span>
                            Wine</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-year"
                                   id="categories-year" checked disabled>
                            <span class="categories__checkbox-indicator"></span>
                            Year</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-country"
                                   id="categories-country" checked>
                            <span class="categories__checkbox-indicator"></span>
                            Country</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-gainLT"
                                   id="categories-gainLT">
                            <span class="categories__checkbox-indicator"></span>
                            Gain(since last trade)%</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-gainSI"
                                   id="categories-gainSI">
                            <span class="categories__checkbox-indicator"></span>
                            Gain(since intro)%</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-gainYTD"
                                   id="categories-gainYTD">
                            <span class="categories__checkbox-indicator"></span>
                            Gain(year to date)%</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-offerPUSB"
                                   id="categories-offerPUSB" checked disabled>
                            <span class="categories__checkbox-indicator"></span>
                            Offer Price(USD)</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-format"
                                   id="categories-format" checked>
                            <span class="categories__checkbox-indicator"></span>
                            Format</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-dateInto"
                                   id="categories-dateInto" checked>
                            <span class="categories__checkbox-indicator"></span>
                            Date Introduced</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-auth"
                                   id="categories-auth">
                            <span class="categories__checkbox-indicator"></span>
                            Authenticator</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-lastTD"
                                   id="categories-lastTD">
                            <span class="categories__checkbox-indicator"></span>
                            Last Traded Date</label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox"
                                   name="categories-tradedPrice" id="categories-tradedPrice">
                            <span class="categories__checkbox-indicator"></span>
                            Last Traded Price </label>
                    </li>
                    <li class="categories__item">
                        <label class="categories__item-label">
                            <input class="visually-hidden categories__input" type="checkbox" name="categories-highestBP"
                                   id="categories-highestBP">
                            <span class="categories__checkbox-indicator"></span>
                            Highest(Current) Bid Price</label>
                    </li>
                </ul>
            </div>
            <div class="filters__wrapper filters__marketItems">
                <h2 class="filters__title">Мarket items<span
                            class="filters__show-btn fa fa-chevron-up show-btn show-btn"></span></h2>
                <div class="filters-panel-wrapper filters__table--marker-wrapper show-panel">
                    <table class="filters__table filters__table--market">
                        <thead>
                        <tr class="filters__table-search-row">
                            <th>
                                <input class="filters__input search" placeholder="Search..." type="search"
                                       data-column="0">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="1">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="2">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="3">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="4">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Gain(since intro)%"
                                       data-column="5">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="6">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="7">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="8">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="9">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="10">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="11">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="12">
                            </th>
                            <th>
                                <input class="filters__input search" type="search" placeholder="Search..."
                                       data-column="13">
                            </th>
                            <th></th>
                        </tr>
                        <tr class="filters__table-title-row">
                            <th>#Codes<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Wine<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Year<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Country<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Gain (since last trade)%<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Gain (since intro)%<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Gain (year to date)%<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Offer
                                <div class="filters__currency-select-wr">
                                    <select class="filters__currency-select">
                                        <option value="USDC">USDC</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                        <option value="EOS">EOS</option>
                                        <option value="CWEX">CWEX</option>
                                    </select>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                                <span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span>
                            </th>
                            <th>Format<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Date Introduced<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Authenticator<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Last Traded Date<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Last Traded<br> Price<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th>Highest(Current) Bid Price<span class="filters_btn"><i class="fa fa-chevron-down"></i><i
                                            class="fa fa-chevron-up"></i></span></th>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="latest-trades">
                <h2 class="latest-trades__title">Latest trades<span
                            class="latest-trades__show-btn fa fa-chevron-up show-btn "></span></h2>
                <div class="show-panel">
                    <table class="latest-trades__table">
                        <thead>
                        <tr>
                            <th>Wine</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>Traded Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Château Lafite Rothschild Pauillac</td>
                            <td>1989</td>
                            <td>1.2343</td>
                            <td>2018.01.01</td>
                        </tr>
                        <tr>
                            <td>Château Lafite Rothschild Pauillac</td>
                            <td>1989</td>
                            <td>1.2343</td>
                            <td>2018.01.01</td>
                        </tr>
                        <tr>
                            <td>Château Lafite Rothschild Pauillac</td>
                            <td>1991</td>
                            <td>1.2343</td>
                            <td>2018.01.01</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="announcements">
                <h2 class="announcements__title">Announcements<span
                            class="announcements__show-btn fa fa-chevron-up show-btn "></span></h2>
                <div class="announcements__panel-wrapper show-panel">
                    <div class="announcements__item"><i class="announcements__icon fa fa-bullhorn"></i><span
                                class="announcements__text">Today 10% price reduction when paying with CWEX coin</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

@include('layouts.footer')

