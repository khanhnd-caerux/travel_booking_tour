<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bus/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bus.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bus/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bus/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bus.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slider/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/post/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/post/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-detail/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-detail/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-detail/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-price/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-price/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tour-price/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contact/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BArABPeEcwbd4Lwh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CXuQsVJYYrbdKy06',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.confirmOrder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.saveOrder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/contact-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.successBooking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|user/(?|edit/([^/]++)(*:38)|update/([^/]++)(*:60))|s(?|etting/(?|edit/([^/]++)(*:95)|update/([^/]++)(*:117)|delete/([^/]++)(*:140))|lider/(?|edit/([^/]++)(*:171)|update/([^/]++)(*:194)|delete/([^/]++)(*:217)))|p(?|ost/(?|edit/([^/]++)(*:251)|update/([^/]++)(*:274)|delete/([^/]++)(*:297))|assword/reset/([^/]++)(*:328))|tour(?|/(?|edit/([^/]++)(*:361)|update/([^/]++)(*:384)|delete/([^/]++)(*:407))|\\-(?|detail/(?|edit/([^/]++)(*:444)|update/([^/]++)(*:467)|delete/([^/]++)(*:490))|price/(?|edit/([^/]++)(*:521)|update/([^/]++)(*:544)|delete/([^/]++)(*:567))))|contact/delete/([^/]++)(*:601)|order/(?|de(?|tail/([^/]++)(*:636)|lete/([^/]++)(*:657))|update/([^/]++)(*:681)))|/email/verify/([^/]++)/([^/]++)(*:722)|/([^/]++)(*:739)|/ajax\\-(?|get\\-(?|bus(*:768)|prices\\-(?|tour(*:791)|bus\\-(?|departure(*:816)|return(*:830))))|count\\-prices\\-tour(*:860))|/language/([^/]++)(*:887))/?$}sDu',
    ),
    3 => 
    array (
      38 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.post.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_detail.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tour_price.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.postDetail',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.busCheckbox',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ycRJhjTAM9klZGK2',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZRPa9Njt7zyCrWq',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      830 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RlGO4YqksMhNOUmu',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Ojh43HZtVu4kiJ2',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xDW8BLeE6tbZnV7B',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\HomeController@index',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\HomeController@index',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\DashboardController@dashboard',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\DashboardController@dashboard',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/user/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\UserController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\UserController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/user',
        'where' => 
        array (
        ),
        'as' => 'admin.user.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BusController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BusController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/bus',
        'where' => 
        array (
        ),
        'as' => 'admin.bus.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bus.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bus/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BusController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BusController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/bus',
        'where' => 
        array (
        ),
        'as' => 'admin.bus.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BusController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BusController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/bus',
        'where' => 
        array (
        ),
        'as' => 'admin.bus.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bus.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bus/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\BusController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\BusController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/bus',
        'where' => 
        array (
        ),
        'as' => 'admin.bus.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SettingController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.slider.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\SliderController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/slider',
        'where' => 
        array (
        ),
        'as' => 'admin.slider.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/post/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/post/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/post/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/post/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.post.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/post/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\PostController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\PostController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/post',
        'where' => 
        array (
        ),
        'as' => 'admin.post.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour',
        'where' => 
        array (
        ),
        'as' => 'admin.tour.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-detail/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-detail/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-detail/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour-detail/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour-detail/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_detail.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-detail/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete_detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete_detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-detail',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_detail.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-price/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@list_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-price/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@create_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-price/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@edit_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour-price/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@update_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tour-price/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@store_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tour_price.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tour-price/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete_price',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\TourController@delete_price',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/tour-price',
        'where' => 
        array (
        ),
        'as' => 'admin.tour_price.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\ContactController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\ContactController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contact/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\ContactController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\ContactController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/contact',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@list',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@list',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@detail',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@detail',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.detail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@update',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@update',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@delete',
        'controller' => 'Cms\\Modules\\Admin\\Controllers\\OrderController@delete',
        'namespace' => 'Cms\\Modules\\Admin\\Controllers',
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
        'as' => 'admin.order.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@showLoginForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BArABPeEcwbd4Lwh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@login',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@login',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BArABPeEcwbd4Lwh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@showRegistrationForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@showRegistrationForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CXuQsVJYYrbdKy06' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@register',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\RegisterController@register',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CXuQsVJYYrbdKy06',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@showResetForm',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cms.authenticated',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\ResetPasswordController@reset',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@logout',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\LoginController@logout',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@show',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@show',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@verify',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@verify',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@resend',
        'controller' => 'Cms\\Modules\\Auth\\Controllers\\VerificationController@resend',
        'namespace' => 'Cms\\Modules\\Auth\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@home',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@home',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.confirmOrder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-order',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@confirmOrder',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@confirmOrder',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.confirmOrder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.saveOrder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-order',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@saveOrder',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@saveOrder',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.saveOrder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.contact.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'send-contact',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@sendContact',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@sendContact',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.postDetail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@postDetail',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@postDetail',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.postDetail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.busCheckbox' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-get-bus',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getBusCheckbox',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getBusCheckbox',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.busCheckbox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xDW8BLeE6tbZnV7B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language/{locale}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:421:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:205:"function ($locale) {
        if (!\\in_array($locale, [\'vi\', \'en\'])) {
            \\abort(404);
        }
        \\session()->put(\'locale\', $locale);
        return \\redirect()->route(\'client.index\');
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000004108b42c0000000014d599f5";}";s:4:"hash";s:44:"wWb+6ucf5sKJCeN6jngPzAHkeJJtPh1utUfl3oNCXas=";}}',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xDW8BLeE6tbZnV7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact/contact-form',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contactPage',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@contactPage',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.successBooking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking/success',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@successBooking',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@successBooking',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.successBooking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycRJhjTAM9klZGK2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-get-prices-tour',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesTour',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesTour',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ycRJhjTAM9klZGK2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Ojh43HZtVu4kiJ2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-count-prices-tour',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@countPricesTour',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@countPricesTour',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8Ojh43HZtVu4kiJ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZRPa9Njt7zyCrWq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-get-prices-bus-departure',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesBusDeparture',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesBusDeparture',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OZRPa9Njt7zyCrWq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RlGO4YqksMhNOUmu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-get-prices-bus-return',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesBusReturn',
        'controller' => 'Cms\\Modules\\Home\\Controllers\\HomeController@getPricesBusReturn',
        'namespace' => 'Cms\\Modules\\Home\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RlGO4YqksMhNOUmu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
