import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;

import java.util.concurrent.TimeUnit;

import static org.junit.Assert.assertEquals;

public class DaratarProjectAutomatedTestLoginFunctionality {
    private WebDriver driver;

    @Before
    public void SetUp()
    {
        driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
    }

    @Test
    public void TestLogin_ShouldLoginSuccessfully() {
        driver.get("http://pdmtrades.eu/");

        String validUsername = "login";
        String validPassword = "123";

        WebElement usernameField = driver.findElement(By.id("username"));
        WebElement passwordField = driver.findElement(By.id("password"));

        usernameField.clear();
        usernameField.sendKeys(validUsername);

        passwordField.clear();
        passwordField.sendKeys(validPassword);

        WebElement loginButton = driver.findElement(By.id("login-submit"));
        loginButton.click();

        WebElement welcomeInfoLoginScreen = driver.findElement(By.id("logInfo"));
        assertEquals("http://pdmtrades.eu/index.php/Library/index", driver.getCurrentUrl());
        assertEquals("Welcome, login! Log out", welcomeInfoLoginScreen.getText());
    }

    @After
    public void TearDown()
    {

    }



}
