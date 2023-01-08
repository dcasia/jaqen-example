<script lang="ts">

    import Page from "./layout/Page.svelte";

    function api<T>(url: string): Promise<T> {
        return fetch(url).then(response => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json<T>()
        })
    }

    type UserType = {
        key: number,
        fields: [
            {
                label: string,
                attribute: string,
                value: string,
                component: string,
                additionalInformation: unknown
            }
        ]
    }

    const promise = api<{ resources: UserType[] }>(`/jaqen-api/resource/user-resources?fieldsFor=index`)

</script>

<Page>

    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Administration</h3>
            </div>
            <div class="card-body">
                <h3 class="card-title">Write a release note for Admin v1.0</h3>
                <div class="divide-y-2 mt-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        All Admin Controls
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        View and Edit Financial Summaries
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        Enabled Bulk Reports
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        View and Edit Payouts
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        View and Edit Payouts
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        and 7 more...
                    </div>
                </div>
            </div>
        </div>
    </div>

    {#await promise}

        <p>...waiting</p>

    {:then users}

        <div class="row row-cards">

            <div class="row row-cards">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
                        </div>

                        <div class="list-group list-group-flush list-group-hoverable">

                            {#each users.resources as user}

                                <div class="list-group-item">

                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="badge bg-red"></span></div>
                                        <div class="col-auto">
                                            <a href="#">
                                            <span class="avatar"
                                                  style="background-image: url(./static/avatars/000m.jpg)"></span>
                                            </a>
                                        </div>

                                        <div class="col text-truncate">

                                            <a href="#" class="text-reset d-block">{user.fields[0].value}</a>

                                            <div class="d-block text-muted text-truncate mt-n1">Change
                                                {user.description}
                                            </div>

                                        </div>

                                        <div class="col-auto">

                                            <a href="#" class="list-group-item-actions">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                                                </svg>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            {/each}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    {:catch error}

        <p style="color: red">{error.message}</p>

    {/await}

</Page>
