<div class="element__card">
    <div class="card h-100">
        <% if $Image %>
            <% if $ElementLink %><a href="$ElementLink.LinkURL" title="Go to $ElementLink.Title.ATT"><% end_if %>
                <img src="$Image.FocusFill(500,330).URL" class="card-img-top" alt="$Image.Title.ATT">
            <% if $ElementLink %></a><% end_if %>
        <% end_if %>
        <div class="card-body">
            <% if $Title && $ShowTitle %><$TitleTag class="element__title $TitleSizeClass">$Title</$TitleTag><% end_if %>
            <% if $Content %><div class="card-text">$Content</div><% end_if %>
            <% if $ElementLink %><p>$ElementLink</p><% end_if %>
        </div>
    </div>
</div>
