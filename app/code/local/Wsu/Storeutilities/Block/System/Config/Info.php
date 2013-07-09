<?php
class Wsu_Storeutilities_Block_System_Config_Info extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    
    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logo = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN)."adminhtml/default/default/images/wsu/wsu_default.png";
		
		//note we would want to get admins marked as help contact.  Add that to this base
         $html = '<img src="'.$logo.'" style="width:200px;float:left;" />
		 		<div style="padding-left:215px;">
                    <h2>Store utilities</h2>
                    <p>This is the general utility module that other modules can be grafted of.</p>
				</div>
				<div style="clear:left;">
					<hr/>
					<h3>Extarnal JS/CS:</h3>
					<p><em><strong>addExternalItem</strong></em> also do the same as addItem but has 3 new types:</p>
					<ul>
						<li>external_css</li>
						<li>external_js</li>
						<li>cdn_js</li>
					</ul>
					<h4>Examples</h4>
					<code><pre>
&lt;layout version=&quot;0.1.0&quot;&gt;
	&lt;default&gt;
		&lt;reference name=&quot;head&quot;&gt;
			&lt;action method=&quot;addItem&quot;&gt;&lt;type&gt;<strong>external_css</strong>&lt;/type&gt;&lt;name&gt;http://developer.yahoo.com/yui/build/reset/reset.css&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;addItem&quot;&gt;&lt;type&gt;<strong>external_js</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;<strong>addExternalItem</strong>&quot;&gt;&lt;type&gt;<strong>external_js</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/imageloader/imageloader-min.js&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;<strong>addExternalItem</strong>&quot;&gt;&lt;type&gt;<strong>external_css</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/fonts/fonts-min.css&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;addItem&quot;&gt;&lt;type&gt;<strong>cdn_js</strong>&lt;/type&gt;&lt;name&gt;//code.jquery.com/jquery-migrate-1.2.1.min.js&lt;/name&gt;&lt;params/&gt;&lt;if/&gt;&lt;cond/&gt;&lt;window_obj&gt;jQuery&lt;/window_obj&gt;&lt;local_path&gt;/js/jquery-migrate-1.2.1.min.js&lt;/local_path&gt;&lt;/action&gt;
		&lt;/reference&gt;
	&lt;/default&gt;
	&lt;catalog_product_view&gt;
		&lt;reference name=&quot;head&quot;&gt;
			&lt;action method=&quot;removeItem&quot;&gt;&lt;type&gt;<strong>external_css</strong>&lt;/type&gt;&lt;name&gt;http://developer.yahoo.com/yui/build/reset/reset.css&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;removeItem&quot;&gt;&lt;type&gt;<strong>external_js</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;<strong>removeExternalItem</strong>&quot;&gt;&lt;type&gt;<strong>external_js</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/imageloader/imageloader-min.js&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
			&lt;action method=&quot;<strong>removeExternalItem</strong>&quot;&gt;&lt;type&gt;<strong>external_css</strong>&lt;/type&gt;&lt;name&gt;http://yui.yahooapis.com/2.8.2r1/build/fonts/fonts-min.css&lt;/name&gt;&lt;params/&gt;&lt;/action&gt;
		&lt;/reference&gt;
	&lt;/catalog_product_view&gt;
&lt;/layout&gt;
					</pre></code>
				
					<h4>Notes:</h4>
					<p>With <strong><em>cdn_js</em></strong> You\'ll want to note that <strong>&lt;params/&gt;&lt;if/&gt;&lt;cond/&gt;</strong> nodes must be there and before <em><strong>window_obj</strong></em> or <em><strong>local_path</strong></em>.  <em><strong>window_obj</strong></em> is the dom object relative to the javascript window object.  IE: window.jQuery is the target so you would load <strong>&lt;window_obj&gt;jQuery&lt;/window_obj&gt;</strong>.
				
					<hr/>
					<h3>Contact</h3>
					<address>
						<h4 style="clear:left;">Primary help contact information:</h4>
						<ul class="vcard">
							<li class="fn">Jeremy Bass</li>
							<li>University Publishing</li>
							<li class="tel">Phone: 5-8820</li>
							<li class="email"><a href="mailto:jeremy.bass@wsu.edu?subject=General%20help%20-%20Magento">Send Email</a></li>
						</ul>
						<hr/>
						<h4 style="clear:left;">General contact information:</h4>
						<ul class="vcard">
							<li class="fn">University Publishing</li>
							<li class="adr">Washington State University,<br/>
								<span class="street-address">PO Box 645910</span>,<br/>
								<span class="region">Pullman, WA</span>,
								<span class="postal-code">99164-5910</span>
								<span class="country-name">USA</span>
							</li>
						</ul>
					</address>

                </div>';        
        
        return $html;
    }
}