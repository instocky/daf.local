<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-07-24 14:41:24
         compiled from "..\views\default\buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24443579356575968d7-94608548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ae4fba1170a93e14a328e3f2850a17ba990bd1' => 
    array (
      0 => '..\\views\\default\\buy.tpl',
      1 => 1469360479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24443579356575968d7-94608548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_5793565759e5d8_03542285',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5793565759e5d8_03542285')) {function content_5793565759e5d8_03542285($_smarty_tpl) {?><section class="home-order">
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
              <?php echo '<script'; ?>
>
                $(function() {
                  $("#proxy-country").countrySelect({
                    defaultCountry: "ru",
                    onlyCountries: px_country
                  });
                });
              <?php echo '</script'; ?>
>
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
<?php }} ?>
