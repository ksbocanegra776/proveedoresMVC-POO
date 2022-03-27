import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.WebElement;

import java.util.concurrent.TimeUnit;

public class Dpverficar {
    WebDriver chromeDriver;
    @Before
    public void abrirDriver(){
        System.setProperty ("webdriver.chrome.driver","C:\\webdriver\\chromedriver.exe");
        chromeDriver = new ChromeDriver ();
        chromeDriver.manage().timeouts().implicitlyWait (10, TimeUnit.SECONDS);
    }

    @Test
    public void hacerbusqueda() throws InterruptedException {
        chromeDriver.get ("http://proveedorespdo/");
        chromeDriver.manage ().window ().maximize ();
        WebElement btnContact = chromeDriver.findElement(By.xpath ("//a[contains(text(),'Contáctenos')]"));
        Miscellaneous.highLight(btnContact,chromeDriver);
        btnContact.click ();

        Thread.sleep(2000);
        WebElement txtName = chromeDriver.findElement (By.xpath ("//input[@id='name']"));
        Miscellaneous.highLight(txtName,chromeDriver);
        txtName.sendKeys("Karina");

        Thread.sleep(2000);
        WebElement txtlastName = chromeDriver.findElement (By.xpath ("//input[@id='lastName']"));
        Miscellaneous.highLight(txtlastName,chromeDriver);
        txtlastName.sendKeys("Bocanegra");

        Thread.sleep(2000);
        WebElement intphone = chromeDriver.findElement (By.xpath ("//input[@id='phone']"));
        Miscellaneous.highLight(intphone,chromeDriver);
        intphone.sendKeys("78592456");

        Thread.sleep(2000);
        WebElement txtEmail = chromeDriver.findElement (By.xpath ("//input[@id='email']"));
        Miscellaneous.highLight(txtEmail,chromeDriver);
        txtEmail.sendKeys("ksb@gmail.com");

        Thread.sleep(2000);
        WebElement txtAffair = chromeDriver.findElement (By.xpath ("//input[@id='affair']"));
        Miscellaneous.highLight(txtAffair,chromeDriver);
        txtAffair.sendKeys("Pruebas de automatización");

        Thread.sleep(2000);
        WebElement txtMessage = chromeDriver.findElement (By.xpath ("//textarea[@id='message']"));
        Miscellaneous.highLight(txtMessage,chromeDriver);
        txtMessage.sendKeys("Correo satisfactorio prueba automatización");

        Thread.sleep(2000);
        WebElement checkbokTyc = chromeDriver.findElement (By.xpath ("//input[@id='tyc']"));
        Miscellaneous.highLight(checkbokTyc,chromeDriver);
        checkbokTyc.click();

        Thread.sleep(2000);
        WebElement checkbokTd = chromeDriver.findElement (By.xpath ("//input[@id='td']"));
        Miscellaneous.highLight(checkbokTd,chromeDriver);
        checkbokTd.click();

        Thread.sleep(2000);
        WebElement btnEnviar = chromeDriver.findElement (By.xpath ("//body/main[1]/div[1]/div[1]/div[2]/input[1]"));
        Miscellaneous.highLight(btnEnviar,chromeDriver);
        btnEnviar.click();
        chromeDriver.close ();
    }
}
