<?php

class Order {

  /**
   * The parent class the contains the other subclasses.
   */

  public $order_info;       // Order Info class.
  public $customer;         // Customer class.
  public $shipping_address; // Address class.
  public $billing_address;  // Address class.
  public $line_item_array;  // A list of LineItem.
  public $payment_info;     // PaymentDetails class.
  public $discount_codes;   // A list of DiscountCode objects
  public $shipping_lines;   // A list of ShippingLine objects

}
