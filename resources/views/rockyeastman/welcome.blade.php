@php
$path = "/assets/rockyeastman"
@endphp

<!DOCTYPE HTML>
<html>
    <head>
        <title>Rocky Eastman - Full Stack Web Developer</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ $path }}/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="{{ $path }}/assets/css/noscript.css" /></noscript>
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="is-loading-0 is-loading-1">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Home -->
                    <article id="home" class="panel special">
                        <div class="image">
                            <img src="{{ $path }}/images/profile.jpg" alt="" data-position="center center" />
                        </div>
                        <div class="content">
                            <div class="inner">
                                <header>
                                    <h1>Rocky Eastman</h1>
                                    <p>Full stack web developer<br />
                                    specializing in website redesign</p>
                                </header>
                                <nav id="nav">
                                    <ul class="actions vertical special spinY">
                                        <li><a href="#about" class="button">About me</a></li>
                                        <li><a href="#contact" class="button">Contact</a></li>
                                        <!--<li><a href="#elements" class="button">Elements</a></li>-->
                                    </ul>
                                </nav>
                                <ul class="icons">
                                    <li><a href="https://github.com/chompchompbalboa" class="icon fa-github"><span class="label">GitHub</span></a></li>
                                    <li><a href="mailto:me@rockyeastman.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                <!-- Work -->
                    <article id="work" class="panel secondary">
                        <div class="image">
                            <img src="{{ $path }}/images/work.jpg" alt="" data-position="center center" />
                        </div>
                        <div class="content">
                            <ul class="actions spinX">
                                <li><a href="#home" class="button small back">Back</a></li>
                            </ul>
                            <div class="inner">
                                <header>
                                    <h2>My Work</h2>
                                </header>
                                <p>Molly Hiatt, architecture student: <a href="http://www.mollyhiatt.com" target="_blank">mollyhiatt.com</a></p>
                            </div>
                        </div>
                    </article>

                <!-- About -->
                    <article id="about" class="panel secondary">
                        <div class="image">
                            <img src="{{ $path }}/images/about.jpg" alt="" data-position="center center" />
                        </div>
                        <div class="content">
                            <ul class="actions spinX">
                                <li><a href="#home" class="button small back">Back</a></li>
                            </ul>
                            <div class="inner">
                                <header>
                                    <h2>About Me</h2>
                                    <p>I believe in creating beautiful websites<br />
                                    at a price every business can afford</p>
                                </header>
                                <p>Hi there! I'm glad you're here.</p>
                                <p>I have quite the diverse background - I've worked for a professional sports team, done research in molecular and cellular biology, and spent several years helping build large contemporary art sculptures. </p>
                                <p>Now I build websites. Specifically, I rebuild websites. Today more than ever, a positive online experience drives customers to your business. Don't let an out of date website hold you back. When you're ready to upgrade, <a href="#contact">get in touch</a></p>
                            </div>
                        </div>
                    </article>

                <!-- Contact -->
                    <article id="contact" class="panel secondary">
                        <div class="image">
                            <img src="{{ $path }}/images/contact.jpg" alt="" data-position="bottom center" />
                        </div>
                        <div class="content">
                            <ul class="actions spinX">
                                <li><a href="#home" class="button small back">Back</a></li>
                            </ul>
                            <div class="inner">
                                <header>
                                    <h2>Contact</h2>
                                </header>
                                <p>The best way to get in touch with me is <a href="mailto:me@rockyeastman.com">via email.</a></p> 
                                <p>If you recieved an invitation from me and have questions, please respond directly to the email. I generally answer very quickly!</p>
                            </div>
                        </div>
                    </article>

                <!-- Elements -->
                    <article id="elements" class="panel secondary">
                        <div class="image">
                            <img src="{{ $path }}/images/contact.jpg" alt="" data-position="center center" />
                        </div>
                        <div class="content">
                            <ul class="actions spinX">
                                <li><a href="#home" class="button small back">Back</a></li>
                            </ul>
                            <div class="inner">
                                <header>
                                    <h2>Elements</h2>
                                </header>

                                <section>
                                    <h4>Text</h4>
                                    <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                                    <hr />
                                    <h2>Heading Level 2</h2>
                                    <h3>Heading Level 3</h3>
                                    <h4>Heading Level 4</h4>
                                    <h5>Heading Level 5</h5>
                                    <h6>Heading Level 6</h6>
                                    <hr />
                                    <h5>Blockquote</h5>
                                    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                                    <h5>Preformatted</h5>
                                    <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                                </section>

                                <section>
                                    <h4>Lists</h4>

                                    <h5>Unordered</h5>
                                    <ul>
                                        <li>Dolor pulvinar etiam.</li>
                                        <li>Sagittis adipiscing.</li>
                                        <li>Felis enim feugiat.</li>
                                    </ul>

                                    <h5>Alternate</h5>
                                    <ul class="alt">
                                        <li>Dolor pulvinar etiam.</li>
                                        <li>Sagittis adipiscing.</li>
                                        <li>Felis enim feugiat.</li>
                                    </ul>

                                    <h5>Ordered</h5>
                                    <ol>
                                        <li>Dolor pulvinar etiam.</li>
                                        <li>Etiam vel felis viverra.</li>
                                        <li>Felis enim feugiat.</li>
                                        <li>Dolor pulvinar etiam.</li>
                                        <li>Etiam vel felis lorem.</li>
                                        <li>Felis enim et feugiat.</li>
                                    </ol>
                                    <h5>Icons</h5>
                                    <ul class="icons">
                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                    </ul>

                                    <h5>Actions</h5>
                                    <ul class="actions">
                                        <li><a href="#" class="button special">Default</a></li>
                                        <li><a href="#" class="button">Default</a></li>
                                    </ul>
                                    <ul class="actions vertical">
                                        <li><a href="#" class="button special">Default</a></li>
                                        <li><a href="#" class="button">Default</a></li>
                                    </ul>
                                </section>

                                <section>
                                    <h4>Table</h4>
                                    <h5>Default</h5>
                                    <div class="table-wrapper">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Item One</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Two</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>19.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Three</td>
                                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                                    <td>29.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Four</td>
                                                    <td>Vitae integer tempus condimentum.</td>
                                                    <td>19.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Five</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td>100.00</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <h5>Alternate</h5>
                                    <div class="table-wrapper">
                                        <table class="alt">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Item One</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Two</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>19.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Three</td>
                                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                                    <td>29.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Four</td>
                                                    <td>Vitae integer tempus condimentum.</td>
                                                    <td>19.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Item Five</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td>100.00</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </section>

                                <section>
                                    <h4>Buttons</h4>
                                    <ul class="actions">
                                        <li><a href="#" class="button special">Special</a></li>
                                        <li><a href="#" class="button">Default</a></li>
                                    </ul>
                                    <ul class="actions">
                                        <li><a href="#" class="button">Default</a></li>
                                        <li><a href="#" class="button small">Small</a></li>
                                    </ul>
                                    <ul class="actions">
                                        <li><a href="#" class="button special icon fa-download">Icon</a></li>
                                        <li><a href="#" class="button icon fa-download">Icon</a></li>
                                    </ul>
                                    <ul class="actions">
                                        <li><span class="button special disabled">Disabled</span></li>
                                        <li><span class="button disabled">Disabled</span></li>
                                    </ul>
                                </section>

                                <section>
                                    <h4>Form</h4>
                                    <form method="post" action="#">
                                        <div class="field half first">
                                            <label for="demo-name">Name</label>
                                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
                                        </div>
                                        <div class="field half">
                                            <label for="demo-email">Email</label>
                                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
                                        </div>
                                        <div class="field">
                                            <label for="demo-category">Category</label>
                                            <div class="select-wrapper">
                                                <select name="demo-category" id="demo-category">
                                                    <option value="">-</option>
                                                    <option value="1">Manufacturing</option>
                                                    <option value="1">Shipping</option>
                                                    <option value="1">Administration</option>
                                                    <option value="1">Human Resources</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field half first">
                                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                            <label for="demo-priority-low">Low</label>
                                        </div>
                                        <div class="field half">
                                            <input type="radio" id="demo-priority-high" name="demo-priority">
                                            <label for="demo-priority-high">High</label>
                                        </div>
                                        <div class="field half first">
                                            <input type="checkbox" id="demo-copy" name="demo-copy">
                                            <label for="demo-copy">Email me a copy</label>
                                        </div>
                                        <div class="field half">
                                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                                            <label for="demo-human">Not a robot</label>
                                        </div>
                                        <div class="field">
                                            <label for="demo-message">Message</label>
                                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                        </div>
                                        <ul class="actions">
                                            <li><input type="submit" value="Send Message" class="special" /></li>
                                            <li><input type="reset" value="Reset" /></li>
                                        </ul>
                                    </form>
                                </section>

                            </div>
                        </div>
                    </article>

                <!-- Footer -->
                    <footer id="footer">
                        <p class="copyright">&copy;2016 Rocky Eastman</p>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ $path }}/assets/js/jquery.min.js"></script>
            <script src="{{ $path }}/assets/js/skel.min.js"></script>
            <script src="{{ $path }}/assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="{{ $path }}/assets/js/main.js"></script>

    </body>
</html>