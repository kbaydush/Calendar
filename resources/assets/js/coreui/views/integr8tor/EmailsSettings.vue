<template>
  <div>
    <h2>Email Settings</h2>
    <form>
      <div class="float-left w-25">
        <div class="float-left w-25 p-3">
          <label for="email-type">Type</label>
        </div>
        <div class="float-left w-50 p-3">
          <select class="form-control form-control-sm" id="email-type">
            <option selected>SMTP</option>
            <option value="1">POP3</option>
            <option value="2">IMAP</option>
            <option value="2">HTTP</option>
          </select>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left border w-50 ml-xl-5 p-2">
        <div class="float-left w-25 text-lg-center">
          <label for="server-ip" class="form-control-sm">Server:</label>
        </div>
        <div class="form-group row float-left">
          <input type="text"
                 class="form-control-sm is-valid"
                 id="server-ip"
                 placeholder="Input Text"
                 value=""
                 required
          >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="port" class="form-control-sm">Port:</label>
        </div>
        <div class="form-group row float-left">
          <input type="text"
                 class="form-control-sm is-valid"
                 id="port"
                 placeholder="Input Text"
                 value=""
                 required
          >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="tls" class="form-control-sm">TLS:</label>
        </div>
        <div class="form-group row float-left">
          <input type="range" class="custom-range-sm" id="tls">
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="user" class="form-control-sm">User:</label>
        </div>
        <div class="form-group row float-left">
          <input type="text"
                 class="form-control-sm is-valid"
                 id="user" placeholder="Input Text"
                 value=""
                 required
          >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="pass" class="form-control-sm">Pass:</label>
        </div>
        <div class="form-group row float-left">
          <input type="text"
                 class="form-control-sm is-valid"
                 id="pass" placeholder="Input Text"
                 value=""
                 required
          >
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left w-25">
        <div class="float-left w-25 p-3">
          <label for="from">From:</label>
        </div>
        <div class="float-left w-50 p-3">
          <input type="text"
                 class="form-control-sm is-invalid"
                 id="from"
                 placeholder="Input Text"
                 required
          >
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left w-25">
        <div class="float-left w-25 p-3">
          <label for="to">To:</label>
        </div>
        <div class="float-left w-50 p-3">
          <input type="text"
                 class="form-control-sm is-invalid"
                 id="to"
                 placeholder="Input Text"
                 required
          >
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left w-25">
        <div class="float-left w-25 p-3">
          <label for="subject">Subject</label>
        </div>
        <div class="float-left w-50 p-3">
          <input type="text"
                 lass="form-control-sm is-invalid"
                 id="subject"
                 aceholder="Input Text"
                 required
          >
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left w-50">
        <div class="float-left w-25 p-3">
          <label for="header">Header</label>
        </div>
        <div class="float-left w-75 p-3">
          <textarea
                  class="form-control"
                    id="header"
                    rows="3"
          >
          </textarea>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left w-50">
        <div class="float-left w-25 p-3">
          <label for="footer">Footer</label>
        </div>

        <div class="float-left w-75 p-3">
          <textarea
                  class="form-control"
                  id="footer"
                  rows="3"
          >
          </textarea>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="form-inline">
        <label class="my-1 mr-2" for="frequence">Frequence</label>
        <select class="custom-select my-1 mr-sm-2" id="frequence">
          <option selected>Collect</option>
          <option value="1">Weekly</option>
          <option value="2">Monthly</option>
          <option value="3">Daily</option>
        </select>
        <div class="clearfix"></div>
        <label class="my-1 mr-2" for="every">Every</label>
        <select class="custom-select my-1 mr-sm-2" id="every">
          <option selected>1</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <div class="clearfix"></div>
        <label class="my-1 mr-2" for="days">Days</label>
        <select class="custom-select my-1 mr-sm-2" id="days">
          <option selected>Days</option>
          <option value="1">Weeks</option>
          <option value="2">Month</option>
          <option value="3">Years</option>
        </select>
        <div class="clearfix"></div>
        <label class="my-1 mr-2" for="at">at:</label>
        <input
                type="text"
                class="form-control-sm"
                id="at"
                placeholder="at:"
                value=""
        >
        <button type="submit" class="btn btn-primary my-1 ml-xl-5">Submit</button>
      </div>
    </form>
  </div>
</template>
<script>
    export default {
        name: "EmailsSettings"
    }
</script>

<style scoped>

</style>
