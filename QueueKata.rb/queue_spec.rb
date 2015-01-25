require './queue.rb'

describe "queue" do
  it "new queue is empty" do
    queue = Queue.new()
    expect(queue.empty()).to eq(true)
  end
end
