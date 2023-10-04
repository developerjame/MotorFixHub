class myHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class="navigation">
      <nav class="navbar navbar-expand-md">
        <div class="logo"><img src="images/Logo 2 1.png" alt=""></div>
        <button class="mnubtn navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          Menu
        </button>
        <div class="collapse navbar-collapse justify-content-end marg" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li  class="nav-item">
              <a id="link"  href="/">Home</a>
            </li>
            <li class="nav-item">
              <a id="link"  href="/section">Services</a>
            </li>
            <li class="nav-item">
              <a id="link"  href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a id="link"  href="/contact">Contact Us</a>
            </li>
            <li class="nav-item">
              <button class="est" data-toggle="modal" data-target="#estimate">
                Get an Estimate
              </button>
            </li>
            <li class="nav-item">
              <a id="link"  href="/login">Admin</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
    `;
  }
}
customElements.define('my-header', myHeader)

class myFooter extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
        <footer>
            <div class="footer-container">
                <div>
                <div id="footer-logo">
                    <img src="images/Logo 2.png" alt="small logo">
                    <h5>Digi<span>mex</span></h5>
                </div>
                <h6>Contact Us</h6>
                <p>+254 726 333 333<br>digimex@org.com</p>
                </div>
                <div id="quick-links">
                <h6>Quick Links</h6>
                <a href="/">Home</a>
                <a href="/section">Services</a>
                <a href="/about-us">About Us</a>
                <a href="/contact">Contact Us</a>
                </div>
                <div>
                <form method="POST" action="/subscription">
                @csrf
                <h6>Subscribe for more info</h6>
                <input type="email" name="email" value="" placeholder="Enter your email">
                <button type="submit">Subscribe</button>
                </form>
                </div>
            </div>
            <hr>
            <h6 id="copyright">Copyright &copy; 2021. All rights reserved.</h6>
        </footer>
      `;
    }
  }
  customElements.define('my-footer', myFooter)