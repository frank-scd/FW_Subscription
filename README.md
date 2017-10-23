# FW_Subscription
--------------------------------------------------------------------------------------------------------------------------------------
Steps to before installing module

1. Make 2 product attributes
    i) "digital_parent" of type text
    ii) "digital_fulfillment_date" of type date
    iii) "flag" of type text

2. Assign the new created attribute to attribute set.

3. Go to catalog product in downloadable product make the price of the product 0$ and  in general tab Visiblity option seletc "Not visible Individualy" and click save.

4. In system->configuration->transactional->email click on add "Add New Template"
5. Add the subject and name of template.
6. In Template content section paste following content.

<div style="border: 5px solid;">
        
        <div style="text-align: center;">
            <img src="http://localhost/magento19new/store/media/email/logo.png" alt="logo">
        </div>
        <div style="background: rgb(229, 239, 244) none repeat scroll 0% 0%; text-align: center; padding: 10px;">
            <h2>Your new issue is here !</h2>
            <a href=""><img src="http://localhost/magento19new/store/media/email/clickhere.png" alt="click here"></a>
            <h4>to download your copy</h4>
        </div>
        <div style="width: 33%; float: left;">
            <img src="http://localhost/magento19new/store/media/email/image1.png" alt="img1" style="display: block; height: 100px;">
            <div style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis luctus interdum. Nam dapibus porta tempor. In eu massa at metus ultrices vehicula eu at diam. In suscipit in enim nec porta. Nam fermentum libero at est lobortis, eget cursus ex convallis. Phasellus ut accumsan ex. In sem elit, maximus commodo felis nec, pulvinar gravida purus. Ut dignissim nisi sit amet nibh vehicula tempor. Aliquam erat volutpat. Mauris ullamcorper lorem et elit maximus, iaculis ornare ante venenatis.</div>
        </div>
        <div style="width: 33%; float: left;">
            <img src="http://localhost/magento19new/store/media/email/image2.png" alt="img2" style="display: block; height: 100px; text-align: center;">
            <div style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis luctus interdum. Nam dapibus porta tempor. In eu massa at metus ultrices vehicula eu at diam. In suscipit in enim nec porta. Nam fermentum libero at est lobortis, eget cursus ex convallis. Phasellus ut accumsan ex. In sem elit, maximus commodo felis nec, pulvinar gravida purus. Ut dignissim nisi sit amet nibh vehicula tempor. Aliquam erat volutpat. Mauris ullamcorper lorem et elit maximus, iaculis ornare ante venenatis. </div>
        </div>
        <div style="width: 33%; float: left;">
            <img src="http://localhost/magento19new/store/media/email/image3.png" alt="img3" style="display: block; height: 100px;">
            <div style="width: 90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis luctus interdum. Nam dapibus porta tempor. In eu massa at metus ultrices vehicula eu at diam. In suscipit in enim nec porta. Nam fermentum libero at est lobortis, eget cursus ex convallis. Phasellus ut accumsan ex. In sem elit, maximus commodo felis nec, pulvinar gravida purus. Ut dignissim nisi sit amet nibh vehicula tempor. Aliquam erat volutpat. Mauris ullamcorper lorem et elit maximus, iaculis ornare ante venenatis. </div>
        </div>
        <div>
                <img src="" alt="facebook" style="">
               <img src="" alt="twitter" >
                <h3><span>Follow us on FACEBOOK and TWITTER !</span></h3>
        </div>
</div>

7. Now go to system configuration in Subscription tab in left click on subscriptino option and add the email template ID which you have created.

