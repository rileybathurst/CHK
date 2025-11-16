# Flow

This is running through a Beef order 

| Page | Template | Actions |
|---------|---------|-|
| /beef    | /template-animal.php |
| /order-declaration/?a=Beef | /order-declaration.php | /inc/ decleration-beef.php |
| /order-details/?n=12934 | /page-order-details.php | /inc/order-details-update.php |
| /order-beef/?n=1001 | /page-order-beef.php | / inc/order-beef-update.php |
| /order-small-goods/?n=1001 | /page-order-small-goods.php | /inc/order-small-goods-update.php |
| /confirm-beef/?n=1001 | /confirm-details.php /page-confirm-beef.php /confirm-small-goods.php | /inc/con1.php /inc/email-beef.php |
| /view-profile | /page-view-profile.php | |
| /view-all | /page-view-all.php | |
| /view-results | /page-view-results.php | |
| /view-order/?n=1001 | /page-view-order.php /view-beef.php /view-small-goods.php | |