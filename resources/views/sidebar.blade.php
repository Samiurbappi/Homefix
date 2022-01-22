<div class="drawer-menu-heading">Interface</div>
                            <!-- Drawer link (Overview)-->
                            <a class="nav-link" href="index.html">
                                <div class="nav-link-icon"><i class="material-icons">language</i></div>
                                Manu
                            </a>
                            <!-- Drawer link (Dashboards)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                                <a href="{{ route('cart.view') }}">Cart</a>

                            </a>





                            <!-- Drawer link (Pages)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i class="material-icons">layers</i></div>
                                Pages
                                <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Pages)-->
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#drawerAccordion">
                                <nav class="drawer-menu-nested nav accordion" id="drawerAccordionPages">
                                    <!-- Drawer link (Pages -> Account)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                        Account
                                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Account)-->
                                    <div class="collapse" id="pagesCollapseAccount" aria-labelledby="headingOne" data-bs-parent="#drawerAccordionPages">
                                        <nav class="drawer-menu-nested nav">
                                            <a class="nav-link" href="app-account-billing.html">Billing</a>
                                            <a class="nav-link" href="app-account-notifications.html">Notifications</a>
                                            <a class="nav-link" href="app-account-profile.html">Profile</a>
                                            <a class="nav-link" href="app-account-security.html">Security</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Authentication)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Authentication)-->
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#drawerAccordionPages">
                                        <nav class="drawer-menu-nested nav">
                                            <a class="nav-link" href="app-auth-login-basic.html">Login 1</a>
                                            <a class="nav-link" href="app-auth-login-styled-1.html">Login 2</a>
                                            <a class="nav-link" href="app-auth-login-styled-2.html">Login 3</a>
                                            <a class="nav-link" href="app-auth-register-basic.html">Register</a>
                                            <a class="nav-link" href="app-auth-password-basic.html">Forgot Password</a>
                                        </nav>
                                    </div>

                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class="nav-link" href="app-invoice.html">Invoice</a>
                                    <!-- Drawer link (Pages -> Knowledgebase)-->
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseKnowledgebase" aria-expanded="false" aria-controls="pagesCollapseKnowledgebase">
                                        Knowledgebase
                                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                                    </a>
                                    <!-- Nested drawer nav (Pages -> Knowledgebase)-->
                                    <div class="collapse" id="pagesCollapseKnowledgebase" aria-labelledby="headingOne" data-bs-parent="#drawerAccordionPages">
                                        <nav class="drawer-menu-nested nav">
                                            <a class="nav-link" href="app-knowledgebase-home.html">Home</a>
                                            <a class="nav-link" href="app-knowledgebase-categories.html">Categories</a>
                                            <a class="nav-link" href="app-knowledgebase-article.html">Article</a>
                                        </nav>
                                    </div>
                                    <!-- Drawer link (Pages -> Pricing)-->
                                    <a class="nav-link" href="app-pricing.html">Pricing</a>
                                </nav>
                            </div>
                            <!-- Divider-->
                            <div class="drawer-menu-divider"></div>
                            <!-- Drawer section heading (UI Toolkit)-->
                            <div class="drawer-menu-heading">UI Toolkit</div>
                            <!-- Drawer link (Components)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                                <div class="nav-link-icon"><i class="material-icons">widgets</i></div>
                                Components
                                <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Components)-->
                            <div class="collapse" id="collapseComponents" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                                <nav class="drawer-menu-nested nav">
                                    <a class="nav-link" href="components-alerts.html">Alerts</a>
                                    <a class="nav-link" href="components-badges.html">Badges</a>
                                    <a class="nav-link" href="components-buttons.html">Buttons</a>
                                    <a class="nav-link" href="components-cards.html">Cards</a>
                                    <a class="nav-link" href="components-chips.html">Chips</a>
                                    <a class="nav-link" href="components-dropdowns.html">Dropdowns</a>
                                    <a class="nav-link" href="components-icon-buttons.html">Icon Buttons</a>
                                    <a class="nav-link" href="components-modals.html">Modals</a>
                                    <a class="nav-link" href="components-navigation.html">Navigation</a>
                                    <a class="nav-link" href="components-progress.html">Progress</a>
                                    <a class="nav-link" href="components-spinners.html">Spinners</a>
                                    <a class="nav-link" href="components-tooltips.html">Tooltips</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Content)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
                                <div class="nav-link-icon"><i class="material-icons">amp_stories</i></div>
                                Content
                                <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Content)-->
                            <div class="collapse" id="collapseContent" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                                <nav class="drawer-menu-nested nav">
                                    <a class="nav-link" href="content-icons.html">Icons</a>
                                    <a class="nav-link" href="content-tables.html">Tables</a>
                                    <a class="nav-link" href="content-typography.html">Typography</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Forms)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseForms" aria-expanded="false" aria-controls="collapseForms">
                                <div class="nav-link-icon"><i class="material-icons">description</i></div>
                                Forms
                                <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                            </a>
                            <!-- Nested drawer nav (Forms)-->
                            <div class="collapse" id="collapseForms" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                                <nav class="drawer-menu-nested nav">
                                    <a class="nav-link" href="forms-inputs.html">Inputs</a>
                                    <a class="nav-link" href="forms-checks-and-radios.html">Checks &amp; Radio</a>
                                    <a class="nav-link" href="forms-input-groups.html">Input Groups</a>
                                    <a class="nav-link" href="forms-range.html">Range</a>
                                    <a class="nav-link" href="forms-select.html">Select</a>
                                </nav>
                            </div>
                            <!-- Drawer link (Utilities)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                                <div class="nav-link-icon"><i class="material-icons">build</i></div>
                                Utilities

                            </a>

                            </div>
