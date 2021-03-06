<?php
/**
 *
 * Standard: PSR-2
 * @link http://www.php-fig.org/psr/psr-2 Full Documentation
 *
 * @package SC\VIEWS
 *
 */
defined('ABSPATH') || defined('DUPXABSPATH') || exit;

DUPX_U_Html::getHeaderMain('Exception error'); ?>
<div id="ajaxerr-data">
    <b style="color:#B80000;">INSTALL ERROR!</b>
    <p>
        Message: <b><?php echo DUPX_U::esc_html($exceptionError->getMessage()); ?></b><br>
        Please see the <?php DUPX_View_Funcs::installerLogLink(); ?> file for more details.
        <?php
        if ($exceptionError instanceof DupxException) {
            if ($exceptionError->haveFaqLink()) {
                ?>
                <br>
                See FAQ: <a href="<?php echo $exceptionError->getFaqLinkUrl(); ?>" ><?php echo $exceptionError->getFaqLinkLabel(); ?></a>
                <?php
            }
            if (strlen($longMsg = $exceptionError->getLongMsg())) {
                echo '<br><br>'.$longMsg;
            }
        }
        ?>
    </p>
    <hr>
    Trace:
    <pre class="exception-trace"><?php
        echo $exceptionError->getTraceAsString();
        ?></pre>
</div>
<div style="text-align:center; margin:10px auto 0px auto">
    <!--<input type="button" class="default-btn" onclick="DUPX.hideErrorResult()" value="&laquo; Try Again" /><br/><br/>-->
    <i style='font-size:11px'>See online help for more details at <a href='https://snapcreek.com/ticket' target='_blank'>snapcreek.com</a></i>
</div>
