<?php


/**
 * @group mdu 
 * 
 */

//class FirstTest extends TestCase {
class FirstTest extends WP_UnitTestCase {


	public function testmdu_myveryfirstclassReturnHelloMyNewWorld() {

		$nonceDemo = new mdu_myveryfirstclass;
	        $expected  = 'Hello my new World !';

		$this->assertEquals( $expected, $nonceDemo->hello_world() );

	
	}
/*
 * TEST
 * Trigger a create nonce and verify it.
 * case1 nonce OK
 * case2 nonce NOK
 *
 * */

      public function testcreatenonce() {

	      $createNonce = new mdu_class_create_nonce;
              $this->assertNotEmpty($createNonce->mdu_wp_create_nonce());
      
      }
	
/*
 * TEST
 * print nonce_url and verify it.
 * case1 nonce OK
 * case2 nonce NOK
 *
 * */
      public function testcreatenonceurl() {
	      $nonceName   = 'mdu_nonce';
	      $adminUrl    = 'admin_url';
	      $doSomeThing = "voila";
	      $nonceUrl = new mdu_class_nonce_url;

              $this->assertContains('mdu_nonce', $nonceUrl->mdu_wp_nonce_url($adminUrl, $doSomeThing, $nonceName));
      
      }

/*
 * TEST
 * print nonce_tick and verify it.
 *
 * */
      public function testgetnoncetick() {

	      $nonceTick = new mdu_class_nonce_tick;
              $this->assertNotEmpty($nonceTick->mdu_wp_nonce_tick());
      
      }

/*
 * TEST
 * print nonce_field and verify nonce.
 * case1 nonce OK
 * case2 nonce NOK
 *
 * */
      public function testgetnoncefield() {

	      $nonceField = new mdu_class_nonce_field;
              $this->assertContains('hidden',$nonceField->mdu_wp_nonce_field());
      
      }
/**
 * @expectedException WPDieException
 */
      public function testtriggernonceays() {
	      $logOut = 'log-out';
	      $nonceAys = new mdu_class_nonce_ays;

              $this->assertContains('Are you sure',$nonceAys->mdu_wp_nonce_ays($logOut));
      
      }

}
?>
