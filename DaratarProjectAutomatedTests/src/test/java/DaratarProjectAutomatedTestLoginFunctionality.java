import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;

import java.util.concurrent.TimeUnit;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.fail;

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
    @Test
    public void TestLogin_ShouldLoginUnsuccessfully() {
        driver.get("http://pdmtrades.eu/");

        String invalidUsername = "login1";
        String invalidPassword = "1234";

        WebElement usernameField = driver.findElement(By.id("username"));
        WebElement passwordField = driver.findElement(By.id("password"));

        usernameField.clear();
        usernameField.sendKeys(invalidUsername);

        passwordField.clear();
        passwordField.sendKeys(invalidPassword);

        WebElement loginButton = driver.findElement(By.id("login-submit"));
        loginButton.click();
        driver.manage().timeouts().implicitlyWait(3, TimeUnit.SECONDS);

        WebElement failToLoginErrorMessage = driver.findElement(By.id("user-result"));
        assertEquals("http://pdmtrades.eu/", driver.getCurrentUrl());
        assertEquals("You've entered invalid data, please try again!", failToLoginErrorMessage.getText());
    }

    @After
    public void TearDown()
    {

    }



}
