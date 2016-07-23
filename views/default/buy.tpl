<section class="home-order">
  <div class="wrap">
    <div class="home-order_head">Купить прокси</div>
    <div class="home-order_body">
      <form action="/order/new" method="post" class="form-order" id="form-order" data-ajax="true">
        <table class="order_table table table-border table-middle">
          <tr class="active">
            <th width="20%" class="text-center upcs">Страна</th>
            <th width="20%" class="text-center upcs">Кол-во IP</th>
            <th width="20%" class="text-center upcs">Период</th>
            <th width="20%" class="text-center upcs">Цена</th>
            <th width="20%"></th>
          </tr>
          <tr>
            <td class="text-center">
              <div class="form mb-0">
                <input type="text" id="proxy-country" readonly />
              </div>
              <input type="hidden" name="country" id="proxy-country_code" />
              <script>
                $(function() {
                  $("#proxy-country").countrySelect({
                    defaultCountry: "ru",
                    onlyCountries: px_country
                  });
                });
              </script>
            </td>
            <td class="text-center">
              <div class="form mb-0">
                <input data-order="count" type="number" name="count" value="5" min="1" required />
              </div>
            </td>
            <td class="text-center">
              <div class="form mb-0">
                <select name="period" data-order="period">
                                      <option value="7" >1 неделя</option>
                                      <option value="14" selected>2 недели</option>
                                      <option value="30" >1 месяц</option>
                                  </select>
              </div>
            </td>
            <td class="text-center"><b data-order="price">0</b> <span class="cur RUB">руб.</span></td>
            <td class="text-center">
              <button type="submit" class="btn btn-block btn-primary">Купить</button>
            </td>
          </tr>
        </table>
      </form>

      <ul class="home-order_list">
        <li>− Прокси выдаются в автоматическом режиме сразу после оплаты −</li>
        <li>− Наши прокси предоставляются только в одни руки - это значит, что кроме вас ими никто не пользовался и не будет пользоваться −</li>
        <li>− Если вам нужны прокси для другой страны, либо большее кол-во, напишите нам: <a href="https://proxy6.net/contact" data-role="feedback">support@proxy6.net</a> −</li>
      </ul>
    </div>
  </div>
</section>
